<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowSermon as ShowSermonResource;
use App\Http\Resources\API\Sermon as SermonResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Sermon;
use App\Models\Church;

class SermonsController extends Controller
{
    public function index($church_id)
    {
        $sermon = Sermon::where('church_id',$church_id)->latest()->paginate(10);
        
        $sermon = ShowSermonResource::collection($sermon);
        
        return $sermon;
    }
}