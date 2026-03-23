<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowPhotos as ShowPhotosResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Photos;

class PhotosController extends Controller
{

	public function showdetails($gallery_id)
  	{
    	$photos = Photos::with('gallery')->where([['gallery_id',$gallery_id],['church_id',Auth::user()->church_id]])->paginate(10);
    	$photos = ShowPhotosResource::collection($photos);

    	return $photos; 
  	}
}