<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\ShowVideoConference as ShowVideoConferenceResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\VideoConferenceUser;
use Twilio\Jwt\Grants\VideoGrant;
use App\Models\VideoConference;
use Illuminate\Http\Request;
use Twilio\Jwt\AccessToken;
use App\Models\Church;
use App\Models\User;

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

    public function showVideoConferences($slug)
    {
        $church = Church::where('slug','=',$slug)->first();

        $videoconferences = VideoConference::where('church_id',$church->id)->get();

        $videoconferences = ShowVideoConferenceResource::collection($videoconferences);
        
        return $videoconferences;
    }
}