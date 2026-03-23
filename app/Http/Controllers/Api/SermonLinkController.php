<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowSermonLink as ShowSermonLinkResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\SermonLink;
use App\Models\Sermon;

class SermonLinkController extends Controller
{
	public function showdetails($sermons_id)
    {
    	$sermon = Sermon::where('id',$sermons_id)->first();
        $links = SermonLink::with('sermons')->where([['sermons_id',$sermon->id],['church_id',Auth::user()->church_id]])->paginate(10);
        
        $links = ShowSermonLinkResource::collection($links);
        
        return $links;
    }
}