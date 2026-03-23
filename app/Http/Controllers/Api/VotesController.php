<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\VoteProcess;
use Exception;
use Log;

class VotesController extends Controller
{
    use VoteProcess;

    public function like(Request $request)
    {
        try
        {
            $vote = $this->createlikeVote($request,Auth::user()->church_id,Auth::id());
            return $vote;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    public function unlike(Request $request)
    {
        try
        {
            $vote = $this->createunlikeVote($request,Auth::user()->church_id,Auth::id());
            return $vote;
        } 
        catch(Exception $e)
        {
            Log::info($e->getMessage());
           // dd($e->getMessage());
        }
    }
}