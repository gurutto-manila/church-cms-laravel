<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowEventGallery as ShowEventGalleryResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\EventGallery;

class EventGalleryController extends Controller
{
	public function showimage($event_id)
    {  
     	$event = EventGallery::where([['event_id',$event_id],['church_id',Auth::user()->church_id]])->paginate(10);
        
        $event = ShowEventGalleryResource::collection($event);
        return $event;
    }
}