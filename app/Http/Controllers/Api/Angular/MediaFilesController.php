<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\MediaFile as MediaFileResource;
use App\Http\Controllers\Controller;
use App\Models\MediaFile;
use App\Models\Church;

class MediaFilesController extends Controller
{

    public function showMediaFiles($slug)
    {
        $church = Church::where('slug','=',$slug)->first();

        $files = MediaFile::where('church_id',$church->id)->get();
        
        $files = MediaFileResource::collection($files);

        return $files;
    }
}