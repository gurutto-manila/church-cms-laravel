<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowEventGallery as ShowEventGalleryResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\EventGallery;

/**
 * EventGalleryController
 *
 * Delivers event-specific photo galleries via API.
 * Returns images associated with specific church events.
 *
 * @package App\Http\Controllers\Api
 */
class EventGalleryController extends Controller
{
	public function showimage($event_id)
    {
     	$event = EventGallery::where([['event_id',$event_id],['church_id',Auth::user()->church_id]])->paginate(10);

        $event = ShowEventGalleryResource::collection($event);
        return $event;
    }
}
