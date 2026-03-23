<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\ShowGallery as ShowGalleryResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Photos;
use App\Traits\Common;
use App\Http\Resources\API\ShowPhotos as ShowPhotosResource;

class GalleryController extends Controller
{
	    use Common;

	public function show()
    {
    	$slider = Gallery::with('photos')->get();
        $gallery = ShowGalleryResource::collection($slider);
    	return response()->json($gallery);
    }

    public function view($gallery_id,$church_id)
    {
        $photos = Photos::where([['gallery_id',$gallery_id],['church_id',$church_id]])->get();
        $photos = ShowPhotosResource::collection($photos);
        return response()->json($photos);
    }

	public function showdetails($church_id)
    {
        $gallery = Gallery::where('church_id',$church_id)->latest()->paginate(10);
        $gallery = ShowGalleryResource::collection($gallery);
        
        return $gallery;
    }
}