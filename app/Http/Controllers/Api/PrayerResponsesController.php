<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\PrayerResponse as PrayerResponseResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Events\SinglePushEvent;
use App\Models\PrayerResponse;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;
use Exception;
use Log;

/**
 * PrayerResponsesController
 *
 * Handles prayer response management and interactions via API.
 * Allows users to view, create, and manage responses to prayer requests.
 * Events triggered on prayer response creation for real-time notifications.
 *
 * @package App\Http\Controllers\Api
 */
class PrayerResponsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $prayer = PrayerResponse::where([['church_id',Auth::user()->church_id],['prayer_id',$id]])->get();
        $prayer = PrayerResponseResource::collection($prayer);

        return $prayer;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        //
        try
        {
            $prayer_request = PrayerRequest::where('id',$id)->first();
            if( $prayer_request->church_id === Auth::user()->church_id)
            {
                $prayer = new PrayerResponse;

                $prayer->church_id = Auth::user()->church_id;
                $prayer->prayer_id = $id;
                $prayer->user_id = Auth::id();

                $prayer->save();

                $data=[];

                $data['church_id']  =   Auth::user()->church_id;
                $data['user_id']    =   $prayer_request->user_id;
                $data['message']    =   'You got Prayer Response';
                $data['type']       =   'prayerrequest';

                event(new SinglePushEvent($data));

                $res['message']= 'You have responded to the prayer request';
                return $res;
            }
            else
            {
                $res['message']= 'Invalid Request';
                return $res;
            }
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }
    }
}
