<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\VoteProcess;
use Exception;
use Log;

/**
 * VotesController
 *
 * Manages user voting interactions (likes/unlikes) for content via API.
 * Handles creation and deletion of vote entries for various resources.
 * Uses VoteProcess trait for centralized voting logic and validation.
 *
 * @package App\Http\Controllers\Api
 */
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
        }
    }
}
