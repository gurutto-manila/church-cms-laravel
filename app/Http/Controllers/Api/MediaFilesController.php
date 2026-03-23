<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\MediaFile as MediaFileResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\MediaFile;

class MediaFilesController extends Controller
{
    public function showvideo()
    {
        $files = MediaFile::where('church_id',Auth::user()->church_id)->latest()->paginate(10);
        $files = MediaFileResource::collection($files);

        return $files;
    }
}