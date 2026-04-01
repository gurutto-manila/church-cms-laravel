<?php

namespace App\Http\Controllers\Admin;

use App\Events\Notification\SingleNotificationEvent;
use App\Events\Notification\PrayerNotificationEvent;
use App\Http\Resources\API\PrayerResponse as PrayerResponseResource;
use App\Http\Resources\PrayerRequest as PrayerRequestResource;
use App\Http\Requests\PrayerUpdateRequest;
use App\Http\Requests\PrayerAudioRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Events\PrayerRequestEvent;
use App\Events\SinglePushEvent;
use App\Models\PrayerResponse;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;
use App\Traits\EventProcess;
use App\Traits\LogActivity;
use App\Traits\Common;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Log;

/**
 * PrayerRequestsController
 *
 * Manages community prayer requests and updates.
 * Handles prayer request submission, status tracking, prayer responses, and notification events.
 * Supports audio/multimedia attachments for prayer requests.
 * Integrates with push notifications and prayer event system for community engagement.
 *
 * @package App\Http\Controllers\Admin
 * @uses EventProcess Trait for event-related processing
 * @uses LogActivity Trait for audit logging
 * @uses Common Trait for helper functions
 */
class PrayerRequestsController extends Controller
{
    use EventProcess;
    use LogActivity;
    use Common;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Request $request, $status)
    {
        //
        $prayers = PrayerRequest::where([['church_id',Auth::user()->church_id],['status',$status]]);
        if(\Request::getQueryString() != null)
        {
            if($request->search != null)
            {
                $prayers = $prayers->where('title','LIKE','%'.$request->search.'%')->orWhere('description','LIKE','%'.$request->search.'%')->orWhereHas('user',function($query) use($request)
                    {
                        $query->whereHas('userprofile',function($q) use($request)
                        {
                            $q->where('firstname','LIKE','%'.$request->search.'%')->orWhere('lastname','LIKE','%'.$request->search.'%');
                        });
                    });
            }
        }
        $prayers = $prayers->get();

        $prayers = PrayerRequestResource::collection($prayers);

        return $prayers;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $count = PrayerRequest::where('church_id',Auth::user()->church_id)->count();

        return view('/admin/prayerrequest/index',['count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAudio($id)
    {
        //
        $prayer = PrayerRequest::where('id',$id)->first();
        if(Gate::allows('prayer',$prayer))
        {
            if($prayer->audio === '')
            {
                return view('/admin/prayerrequest/audio',['prayer' => $prayer]);
            }
            else
            {
                abort(403);
            }
        }
        else
        {
            abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAudio(PrayerAudioRequest $request,$id)
    {
        //
        try
        {
            $prayer = PrayerRequest::where('id',$id)->first();
            $folder = 'uploads/audio/'.Auth::user()->church_id.'/'.$prayer->id;
            if($request->file != '')
            {
                $filename= date('Y-m-dHis').'.'.$request->encoding;
                $path = $this->putContentsByFilename($folder,$request->file,$filename);
            }
            elseif($request->audio != '')
            {
                $path = $this->uploadFile($folder,$request->audio);
            }

            $prayer->audio = $path;
            $prayer->save();

            $user=[];

            $user['church_id']  =   Auth::user()->church_id;
            $user['user_id']    =   $prayer->user_id;
            $user['message']    =   'Your have received Prayer Audio';
            $user['type']       =   'prayerrequest';

            event(new SinglePushEvent($user));

            $message=('Prayer Audio Sent Successfully');

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $prayer,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADDED_PRAYER_AUDIO,
                $message
            );

            return redirect('/admin/prayerrequests')->with('successmessage','Prayer Audio Sent Successfully');
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $prayer = PrayerRequest::where('id',$id)->first();

        return view('/admin/prayerrequest/show',['prayer' => $prayer]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showResponse($id)
    {
        //
        $responses = PrayerResponse::where([['church_id',Auth::user()->church_id],['prayer_id',$id]])->get();
        $count = count($responses);
        $responses = PrayerResponseResource::collection($responses);

        return view('/admin/prayerrequest/response',['responses' => $responses , 'count' => $count]);
    }

    public function approveList($id)
    {
        //
        $array = [];

        $prayer = PrayerRequest::where('id',$id)->first();

        if(Gate::allows('prayer',$prayer))
        {
            $array['id']                = $prayer->id;
            $array['title']             = $prayer->title;
            $array['description']       = $prayer->description;
            $array['date']              = date('d-m-Y H:i:s',strtotime($prayer->date));
            $array['user_name']         = $prayer->user->name;
            $array['user_fullname']     = $prayer->user->FullName;
            $array['status']            = $prayer->status;
            $array['image']             = $prayer->image === null ? null:$prayer->ImagePath;

            return $array;
        }
        else
        {
            abort(403);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $prayer = PrayerRequest::where('id',$id)->first();

        if(Gate::allows('prayer',$prayer))
        {
            return view('/admin/prayerrequest/edit',['prayer'=>$prayer]);
        }
        else
        {
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrayerUpdateRequest $request, $id)
    {
        //
        try
        {
            $prayer = PrayerRequest::where('id',$id)->first();

            $prayer->status = $request->status;

            $prayer->approved_at = date('Y-m-d H:i:s');
            if($request->status === 'approve')
            {
                if( ( $request->publish_later === null ) || ( $request->publish_later === 'false' ) )
                {
                    $prayer->publish_at  = Carbon::now();
                }
                else
                {
                    $prayer->publish_at  = date('Y-m-d H:i:s',strtotime($data->publish_at));
                }
                $prayer->expire_at = date('Y-m-d H:i:s',strtotime($request->expire_at));
            }
            else
            {
                $prayer->comments = $request->comments;
            }

            $prayer->save();

            $user=[];

            $user['church_id']  =   Auth::user()->church_id;
            $user['user_id']    =   $prayer->user_id;
            if($prayer->status === 'approve')
            {
                $user['message']    =   'Your Prayer Request Has Been Approved';
            }
            else
            {
                $user['message']    =   'Your Prayer Request Has Been Cancelled';
            }
            $user['type']       =   'prayerrequest';

            event(new SinglePushEvent($user));

             $array = [];
             $array['user']     =$prayer->user ;
             $array['details']  = $user['message'];

             event(new SingleNotificationEvent($array));

            if( ($prayer->status === 'approve') && ($request->publish_later != 'true') )
            {
                $data=[];

                $data['church_id']  =   Auth::user()->church_id;
                $data['user_id']    =   $prayer->user_id;
                $data['message']    =   'New Prayer created';
                $data['type']       =   'prayerrequest';

                event(new PrayerRequestEvent($data));

                $array = [];

                $array['church_id']         = Auth::user()->church_id;
                $array['user_id']           = $prayer->user_id;
                $array['details']           = 'New Prayer Request created';

                event(new PrayerNotificationEvent($array));
            }

            $church_id = Auth::user()->church_id;
            $entity_id = $prayer->id;
            $entity_name = get_class($prayer);
            $date =  date('Y-m-d H:i:s',strtotime('-2 days',strtotime($prayer->date)));
            $array = array('user'=>$prayer->user->userprofile->firstname , 'date'=>date('d-m-Y h:i A',strtotime($prayer->date)) );
            $user_id = $prayer->user_id;
            $this->sendToPrayerRequestReminder($church_id,$entity_id,$entity_name,$date,$array,$user_id);

            if($prayer->status === 'approve')
            {
                $message = 'Prayer Request Approved Successfully';
            }
            else
            {
                $message = 'Prayer Request Cancelled Successfully';
            }

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $prayer,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_APPROVED_PRAYER_REQUEST,
                $message
            );

            $res['success'] = $message;
            return $res;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }
    }
}
