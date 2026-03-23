<?php

namespace App\Http\Controllers\Api\Angular;

use App\Http\Resources\API\NewsLetter as NewsLetterResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsLetter;
use App\Models\Church;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        //
        $church = Church::where('slug','=',$slug)->first();

        $newsletter = NewsLetter::where('church_id',$church->id)->paginate(10);
        $newsletter = NewsLetterResource::collection($newsletter);

        return $newsletter;
    }
}