<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\API\Bulletin as BulletinResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Bulletin;

class BulletinsController extends Controller
{
    public function show()
    {
        $bulletins = Bulletin::where('church_id',Auth::user()->church_id)->latest()->paginate(10);
        $bulletins = BulletinResource::collection($bulletins);
        return $bulletins;
    }
}