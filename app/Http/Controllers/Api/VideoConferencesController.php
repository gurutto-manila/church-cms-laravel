<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\VideoConference as VideoConferenceResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\VideoConferenceUser;
use Twilio\Jwt\Grants\VideoGrant;
use App\Models\VideoConference;
use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use App\Models\Church;
use App\Models\User;
use Exception;
use Log;

class VideoConferencesController extends Controller
{
    protected $sid;
    protected $token;
    protected $key;
    protected $secret;

    public function __construct()
    {
       $this->sid       = config('services.twilio.sid');
       $this->token     = config('services.twilio.token');
       $this->key       = config('services.twilio.key');
       $this->secret    = config('services.twilio.secret');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$videoconferenceusers = VideoConferenceUser::where('participant_id',Auth::id())->get();
        $user_id=Auth::id();
         $videoconference = VideoConference::where('user_id',$user_id)->orWhereHas('videoConferenceUser' , function($query) use ($user_id){
            $query->where('participant_id',$user_id);
        })->latest()->get();


        $videoconference = VideoConferenceResource::collection($videoconference);

        return $videoconference;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug,$user_id)
    {
        //
    try
     {
        $videoconference = VideoConference::where('slug',$slug)->first();
        $videoconferenceusers = VideoConferenceUser::where('conference_id',$videoconference->id)->pluck('participant_id')->toArray();

        foreach ($videoconferenceusers as $videoconferenceuser) 
        {
            if($user_id == $videoconferenceuser)
            {
                $user = User::where('id',$user_id)->first();

                $name=$user->FullName;

                if($name==null || $name=='' )
                {
                   $name=$user->name;
                }

                $token = new AccessToken($this->sid, $this->key, $this->secret, 3600, $name);

                $videoGrant = new VideoGrant();
                $videoGrant->setRoom($videoconference->slug);

                $token->addGrant($videoGrant);
                $accessToken = $token->toJWT();
            }
        }
 
        $array = [];

        $array['title']         = $videoconference->name;
        $array['description']   = $videoconference->description;
        $array['slug']          = $videoconference->slug;
        $array['roomId']        = $videoconference->room_id;
        $array['composeId']     = $videoconference->compose_id;
        $array['status']        = $videoconference->status;
        $array['accessToken']   = $accessToken;

         return response()->json([
            'success'   =>  true,
            'message'   =>  'Show Video Conference',
            'data'      =>  $array
        ],200);

     }
        catch(Exception $e)
        {
             Log::info($e->getMessage());

        }     
    }
}