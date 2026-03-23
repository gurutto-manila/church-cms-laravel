<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\Help as HelpsResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Church;
use App\Models\Help;

class HelpsController extends Controller
{

    public function showHelps($slug)
    {
        $church = Church::where('slug','=',$slug)->first();

        $helps = Help::where('church_id',$church->id)->get();
        
        $helps = HelpsResource::collection($helps);

        return $helps;
    }
}