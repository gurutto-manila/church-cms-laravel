<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\Sermon as SermonResource;
use App\Http\Controllers\Controller;
use App\Models\Sermon;
use App\Models\Church;

class SermonsController extends Controller
{
    public function showSermons($slug)
    {
        $church = Church::where('slug','=',$slug)->first();

        $sermons = Sermon::where('church_id',$church->id)->get();
        
        $sermons = SermonResource::collection($sermons);

        return $sermons;
    }
}