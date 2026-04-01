<?php

namespace App\Http\Controllers\Api;

use App\Events\Notification\SingleNotificationEvent;
use App\Http\Resources\API\PrayerRequestUser as PrayerRequestUserResource;
use App\Http\Resources\API\PrayerRequest as PrayerRequestResource;
use App\Http\Requests\PrayerAddRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;
use App\Traits\LogActivity;
use App\Helpers\SiteHelper;
use App\Traits\Common;
use App\Models\Church;
use Exception;
use Log;

class PrayerRequestsController extends Controller
{
    use LogActivity;
    use Common;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $prayer = PrayerRequest::where([['church_id',Auth::user()->church_id],['status','approve'],['publish_at','<=',date('Y-m-d H:i:s')]])->where('user_id','!=',Auth::id())->get();
        $prayer = PrayerRequestResource::collection($prayer);

        return $prayer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrayerAddRequest $request)
    {
        //
        try
        {
            $prayer = new PrayerRequest;

            $prayer->church_id      = Auth::user()->church_id;
            $prayer->user_id        = Auth::id();
            $prayer->title          = $request->title;
            $prayer->description    = $request->description;
            $prayer->status         = "pending";
            $prayer->date           = date('Y-m-d H:i:s',strtotime($request->date));
            $file = $request->file('image');
            if($file != null)
            {
                $folder = Auth::user()->church_id.'/prayer';
                $prayer->image  = $this->uploadFile($folder,$file); 
            }
            else
            {
                $prayer->image = 'uploads/images/prayer.jpg';
            }

            $prayer->save();

            $message = 'Prayer Request Added Successfully';

             $array = [];
             $admin = SiteHelper::getAdmin(Auth::user()->church_id);
             $array['user']     =$admin ;
             $array['details']  = 'New Prayer Request Received';

             event(new SingleNotificationEvent($array));

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $prayer,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADD_PRAYER_REQUEST,
                $message
            );

            $res['message'] = $message;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $prayer = PrayerRequest::where([['user_id',Auth::id()]])->get();
        $prayer = PrayerRequestUserResource::collection($prayer);

        return $prayer;
    }
}