<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PrayerAddRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\PrayerRequest;
use App\Traits\LogActivity;
use App\Traits\Common;
use Carbon\Carbon;
use Exception;
use Log;

/**
 * PrayerRequestAddController
 *
 * Handles creation of new prayer requests.
 * Allows church members to submit prayer requests for community prayer support.
 * Integrates with prayer request notification system.
 *
 * @package App\Http\Controllers\Admin
 * @uses LogActivity Trait for audit logging
 * @uses Common Trait for helper functions
 */
class PrayerRequestAddController extends Controller
{
    use LogActivity;
    use Common;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin/prayerrequest/create');
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
                $prayer->image = '/uploads/images/prayer.jpg';
            }

            $prayer->save();

            $message = 'Prayer Request Added Successfully';

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $prayer,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADD_PRAYER_REQUEST,
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
