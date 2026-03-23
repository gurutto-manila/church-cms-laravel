<?php

namespace App\Http\Controllers\Api\Guest;

use App\Http\Resources\API\Guest\PrayerRequest as PrayerRequestResource;
use App\Http\Controllers\Controller;
use App\Models\PrayerRequest;

class PrayerRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($church_id)
    {
        //
        $prayer = PrayerRequest::where([['church_id',$church_id],['status','approve']])->get();
        $prayer = PrayerRequestResource::collection($prayer);

        return $prayer;
    }
}