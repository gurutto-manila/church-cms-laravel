<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowEvent as ShowEventResource;
use App\Http\Resources\API\Events as EventsResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Events;
use Carbon\Carbon;

/**
 * EventsController
 *
 * Provides event listings and detailed event information via API.
 * Returns upcoming and past events with filtering by date range.
 *
 * @package App\Http\Controllers\Api
 */
class EventsController extends Controller
{

    public function upcoming()
    {
        $end_date = Carbon::now();
        $event = Events::where([['church_id',Auth::user()->church_id],['end_date','>=',$end_date]])->get();
        $upcomingevent= ShowEventResource::collection($event);

        return $upcomingevent;
    }

    public function past()
    {
        $end_date = Carbon::now();
        $event = Events::where([['church_id',Auth::user()->church_id],['end_date','<',$end_date]])->get();
        $pastevent= ShowEventResource::collection($event);

        return $pastevent;
    }

    public function show($id)
    {
        $event = Events::where([['church_id',Auth::user()->church_id],['id',$id]])->get();
        $event= ShowEventResource::collection($event);

        return $event;
    }
}
