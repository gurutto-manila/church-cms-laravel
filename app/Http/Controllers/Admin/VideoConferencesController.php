<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VideoConferenceInUpdateRequest;
use App\Http\Requests\VideoConferenceUpdateRequest;
use App\Http\Requests\VideoConferenceRequest;
use App\Http\Resources\User as UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\VideoConferenceUser;
use App\Mail\RoomInvitationMail;
use App\Models\VideoConference;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Exception;
use Log;
use DB;

/**
 * VideoConferencesController
 *
 * Manages video conference meetings and virtual gathering functionality.
 * Handles conference creation, participant management, and room invitations.
 * Supports conference scheduling, status tracking, and participant list management.
 * Integrates with email notifications for conference invitations.
 *
 * @package App\Http\Controllers\Admin
 */
class VideoConferencesController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $getStream = VideoConference::with('userInfo')->where([['church_id',Auth::user()->church_id],['user_id',Auth::id()]])->orderBy('id','desc');

        $query = $request->search;
        if($query != null)
        {
            $getStream = $getStream->where('name','LIKE','%'.$query.'%')->orWhere('status','LIKE','%'.$query.'%');
        }

        $getStream = $getStream->paginate(4);

        return view('admin.video_conference.index', ['getStream' => $getStream , 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = User::ByChurch(Auth::user()->church_id)->ByRole(5)->ByMembershipType('member')->ByStatus('active')->get();

        return view('admin.video_conference.create', ['members' => $members]);
    }

    public function list()
    {
        $church_id= Auth::user()->church_id;
        $users = User::where(function ($query) use ($church_id) {
              $query->ByChurch($church_id)->where('usergroup_id', 6);
          })->orWhere(function ($query) use ($church_id) {
              $query->ByChurch($church_id)->where('usergroup_id', 5)->ByMembershipType('member');
            })->ByStatus('active')->get();

        $users = UserResource::collection($users);
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoConferenceRequest $request)
    {
        try
        {
            $conference                 = new VideoConference;

            $conference->church_id      = Auth::user()->church_id;
            $conference->user_id        = Auth::id();
            $conference->name           = $request->name;
            $conference->description    = $request->description;
            $conference->slug           = Str::slug($request->name.'-'.time(),'-');
            $conference->joining_date   = date('Y-m-d H:i:s',strtotime($request->joining_date));
            $conference->duration       = $request->duration;

            $conference->save();

            $members = $request->members;
            if(count($members)>0)
            {
                foreach ($members as $key => $user_id)
                {
                    $conferenceUsers                  = new VideoConferenceUser;

                    $conferenceUsers->conference_id   = $conference->id;
                    $conferenceUsers->participant_id  = $user_id;

                    $conferenceUsers->save();

                    $user = User::find($user_id);

                    if($user->email != null)
                    {
                        Mail::to($user->email)->queue(new RoomInvitationMail($user,$conference));
                    }
                }
            }

            $saveTwilio = \Conference::storeData($request, $conference->id, $slug);
            if(count($saveTwilio) > 0 && $saveTwilio['status']===false)
            {
               return redirect('admin/video-conference')->with('error', $saveTwilio['message']);
            }


            $res['success'] = 'Room Created Successfully';
            return $res;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }
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
        if(empty($conference))
        {
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }

        if(Auth::id() != $conference->user_id)
        {
            $checkUser = VideoConferenceUser::where([['conference_id',$conference->id],['participant_id',Auth::id()]])->get();
            if(count($checkUser)===0)
            {
                return redirect('admin/video-conference')->with('error', 'No records found.');
            }
        }
        $roomName=$conference->slug;
        $identity=Auth::user()->FullName;

        if($identity===null || $identity==='' )
        {
          $identity=Auth::user()->name;
        }

        $details = \Conference::showDetails($conference->slug,$identity);

        $accessToken = 0;
        if(count($details)>0)
        {
            $accessToken = $details['accessToken'];
        }

        return view('admin.video_conference.view',[ 'accessToken' => $accessToken,'identity'=>$identity, 'roomName' => $roomName, 'conference' => $conference ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function editList($id)
    {
        $conference = VideoConference::with('participantInfo')->where('id',$id)->first();

        if(Auth::id() === $conference->user_id)
        {
            $array = [];
            $array['name']           =   $conference->name;
            $array['description']    =   $conference->description;
            $array['duration']       =   $conference->duration;
            $array['joining_date']=$conference->joining_date===null ? '':date('d-m-Y h:i:s a',strtotime($conference->joining_date));
            foreach ($conference->participantInfo as $key => $user)
            {
                $array['members'][$key] = $user->id;
            }

            $church_id= Auth::user()->church_id;
            $users = User::where(function ($query) use ($church_id) {
              $query->ByChurch($church_id)->where('usergroup_id', 6);
              })->orWhere(function ($query) use ($church_id) {
              $query->ByChurch($church_id)->where('usergroup_id', 5)->ByMembershipType('member');
              })->ByStatus('active')->get();


            $array['users'] = UserResource::collection($users);
        }

        return $array;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = VideoConference::with('participantInfo')->find($id);

        if(Auth::id() != $conference->user_id)
        {
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }

        $multipleUsers = array();
        if(count($conference->participantInfo)>0)
        {
            foreach ($conference->participantInfo as $key => $xvalue)
            {
                $multipleUsers[] = $xvalue->id;
            }
        }
        $members = User::ByChurch(Auth::user()->church_id)->ByRole(5)->ByMembershipType('member')->ByStatus('active')->get();

        return view('admin.video_conference.edit', compact('conference','multipleUsers','members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoConference  $VideoConference
     * @return \Illuminate\Http\Response
     */
    public function update(VideoConferenceUpdateRequest $request, $id)
    {
        try
        {
            $conference                 = VideoConference::find($id);

            $conference->user_id        = Auth::id();
            $conference->description    = $request->description;
            $conference->joining_date   = date('Y-m-d H:i:s',strtotime($request->joining_date));
            $conference->duration       = $request->duration;
            $conference->created_by     = Auth::id();

            $conference->save();

            //user projects
            $participant_data = $request->members;
            $participant_count = VideoConferenceUser::where('conference_id', $conference->id)->get();
            $remove_participant_id = array();
            if (count($participant_count) > 0)
            {
                foreach ($participant_count as $pn_key => $pn_value)
                {
                    $participant_id = $pn_value->id;
                    if (isset($participant_data[$pn_key]))
                    {
                        $remove_participant_id[] = $participant_id;
                        $update_participants = VideoConferenceUser::find($participant_id);
                        $update_participants->participant_id = $participant_data[$pn_key];
                        $update_participants->save();
                    }
                }

                if (count($remove_participant_id) > 0 && count($participant_count) != count($remove_participant_id))
                {
                    VideoConferenceUser::whereNotIn('id', $remove_participant_id)->where('conference_id', $conference->id)->delete();
                }
            }

            if (count($participant_data) === 0 && count($participant_count) > 0)
            {
                VideoConferenceUser::where('conference_id', $conference->id)->delete();
            }

            if (count($participant_data) > 0 && count($participant_count) < count($participant_data))
            {
                foreach ($participant_data as $key => $participant)
                {
                    if ($key >= count($participant_count) && !empty($participant))
                    {
                        $inser_participant = new VideoConferenceUser();
                        $inser_participant->conference_id = $conference->id;
                        $inser_participant->participant_id = $participant;
                        $inser_participant->save();
                    }
                }
            }
            $res['success'] = 'Room Updated Successfully';

            return $res;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }
    }

    public function invites(Request $request, $id)
    {
        $logged = Auth::user()->id;
        $conference = VideoConference::where('user_id',$logged)->where('status','!=','stop')->where('id',$id)->first();
        if(empty($conference)){
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }
        $query = VideoConferenceUser::query()->with('usersInfo');
        $pages = (isset($request->page) ? $request->page : '');
        $search = '';
        $query_string = array();
        $getParticipant = $query->where('conference_id',$conference->id)->orderBy('id', 'desc')->paginate(10);

        $build = http_build_query($query_string);
        return view('admin.video_conference.invites',compact('conference', 'getParticipant', 'pages', 'search', 'build'));
    }

    public function remove(Request $request, $id)
    {
        $logged = Auth::user()->id;
        $conference = VideoConference::where('user_id',$logged)->where('id',$id)->first();
        if(empty($conference)){
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }

        VideoConference::where('id',$id)->delete();
        VideoConferenceUser::where('conference_id',$id)->delete();

        return redirect('admin/video-conference')->with('message', 'Room has been deleted successfully.');
    }

    public function removeUsers(Request $request, $id)
    {
        $logged = Auth::user()->id;
        $conference = VideoConference::where('user_id',$logged)->pluck('id')->toArray();
        if(count($conference)===0){
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }
        $getInfo = VideoConferenceUser::where('id',$id)->first();
        $url ='admin/video-conference';
        $message=  'No records found.';
        $type = 'error';
        if(!empty($getInfo)){
            $conferenceId = $getInfo->conference_id;
            VideoConferenceUser::whereIn('conference_id',$conference)->where('id',$id)->delete();
             $url ='admin/video-conference/manage-invites/'.$conferenceId;
             $message=  'Invites has been deleted successfully.';
             $type = 'message';
        }

        return redirect($url)->with($type, $message);
    }

    public function statusUpdate(Request $request, $id)
    {
        $logged = Auth::user()->id;
        $conference = VideoConference::where('user_id',$logged)->where('id',$id)->first();
        if(!empty($conference)){
            $closeTwilio = \Conference::closeConnection($conference, $id);
            if(count($closeTwilio) > 0 && $closeTwilio['status']===false){
               return redirect('admin/video-conference')->with('error', $closeTwilio['message']);
            }
        }
        return redirect('admin/video-conference');
    }

    public function callback(Request $request)
    {
        $event = $_REQUEST['StatusCallbackEvent'];
        $cid = $_REQUEST['CompositionSid'];
        if($event==='composition-available'){
            VideoConference::where('compose_id',$cid)->update(array('compose_status'=>'available'));
            \Conference::saveVideo($cid);
        }
    }

    public function recordings(Request $request, $id)
    {
        $conference = VideoConference::with('participantInfo')->find($id);
        if(empty($conference)){
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }
        $logged = Auth::user()->id;

        return view('admin.video_conference.recordings',compact('conference'));
    }

    public function addinvites(Request $request, $id)
    {
        $conference = VideoConference::where('user_id',Auth::id())->where('status','!=','stop')->where('id',$id)->first();
        if(empty($conference))
        {
            return redirect('admin/video-conference')->with('error', 'No records found.');
        }
        $multipleUsers = array();
        if(count($conference->participantInfo)>0)
        {
            foreach ($conference->participantInfo as $key => $xvalue)
            {
                $multipleUsers[] = $xvalue->id;
            }
        }

        $members = User::ByChurch(Auth::user()->church_id)->ByRole(5)->ByStatus('active')->get();

        return view('admin.video_conference.add_invites',compact('conference','multipleUsers','members'));
    }

    public function saveinvites(VideoConferenceInUpdateRequest $request, $id)
    {
        $conference = VideoConference::find($id);
        $conference->user_id = Auth::id();
        $conference->created_by = Auth::id();
        $conference->save();

        //user projects
        $participant_data = $request->members;
        $participant_count = VideoConferenceUser::where('conference_id', $conference->id)->get();
        $remove_participant_id = array();
        if (count($participant_count) > 0) {
            foreach ($participant_count as $pn_key => $pn_value) {
                $participant_id = $pn_value->id;
                if (isset($participant_data[$pn_key])) {
                    $remove_participant_id[] = $participant_id;
                    $update_participants = VideoConferenceUser::find($participant_id);
                    $update_participants->participant_id = $participant_data[$pn_key];
                    $update_participants->save();
                }
            }

            if (count($remove_participant_id) > 0 && count($participant_count) != count($remove_participant_id)) {
                VideoConferenceUser::whereNotIn('id', $remove_participant_id)->where('conference_id', $conference->id)->delete();
            }
        }

        if (count($participant_data) === 0 && count($participant_count) > 0) {
            VideoConferenceUser::where('conference_id', $conference->id)->delete();
        }

        if (count($participant_data) > 0 && count($participant_count) < count($participant_data)) {
            foreach ($participant_data as $key => $participant) {
                if ($key >= count($participant_count) && !empty($participant)) {
                    $inser_participant = new VideoConferenceUser();
                    $inser_participant->conference_id = $conference->id;
                    $inser_participant->participant_id = $participant;
                    $inser_participant->save();
                }
            }
        }


        $res['success'] = 'Invites Updated Successfully';
        return $res;
    }
}
