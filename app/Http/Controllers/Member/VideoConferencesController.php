<?php

namespace App\Http\Controllers\Member;

use App\Models\VideoConference;
use App\Models\VideoConferenceUser;
use App\Models\User;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VideoConferenceRequest;
use App\Http\Controllers\Controller;

/**
 * VideoConferencesController
 *
 * Manages video conference rooms and meetings for member usage.
 * Integrates with Twilio for video conference functionality.
 * Handles video conference creation, updates, and participant management.
 *
 * @package App\Http\Controllers\Member
 */
class VideoConferencesController extends Controller
{

    protected $sid;
    protected $token;
    protected $key;
    protected $secret;

    public function __construct()
    {
       $this->sid = config('services.twilio.sid');
       $this->token = config('services.twilio.token');
       $this->key = config('services.twilio.key');
       $this->secret = config('services.twilio.secret');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logged = Auth::user()->id;
        $video = VideoConferenceUser::where('participant_id', $logged)->pluck('conference_id')->toArray();
        $query = VideoConference::query()->with('userInfo');
        $pages = (isset($request->page) ? $request->page : '');
        $search = '';
        $query_string = array();
        if (isset($request->search) && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('status', 'like', "%{$search}%");
            $query_string['search'] = $search;
        }

        $getStream = $query->whereIn('id',$video)->orderBy('id', 'desc')->paginate(10);
        $build = http_build_query($query_string);
        return view('member.video_conference.index', compact('getStream', 'pages', 'search', 'build'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conference = VideoConference::where('slug',$id)->first();
        if(empty($conference)){
            return redirect('member/video-conference')->with('error', 'No records found.');
        }
        $logged = Auth::user()->id;;
        $conferenceId = $conference->id;
        if($logged!=$conference->user_id){
            $checkUser = VideoConferenceUser::where('conference_id',$conferenceId)->where('participant_id',$logged)->get();
            if(count($checkUser)==0){
                return redirect('member/video-conference')->with('error', 'No records found.');
            }
        }

        $roomName = $conference->slug;
        $identity = Auth::user()->name;

       $token = new AccessToken($this->sid, $this->key, $this->secret, 3600, $identity);

       $videoGrant = new VideoGrant();
       $videoGrant->setRoom($roomName);

       $token->addGrant($videoGrant);

        return view('member.video_conference.view',[ 'accessToken' => $token->toJWT(), 'roomName' => $roomName ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoConference $VideoConference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoConference $VideoConference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoConference $VideoConference)
    {
        //
    }
}
