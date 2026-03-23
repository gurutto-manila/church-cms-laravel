<?php

namespace App\Observers;

use Illuminate\Support\Facades\Auth;
use App\Models\VideoConference;
use Exception;
use Log;

class VideoConferenceObserver
{
    /**
     * Handle the videoconference "created" event.
     *
     * @param  \App\Models\VideoConference  $videoconference
     * @return void
     */
    public function created(VideoConference $videoconference)
    {
        //
        try
        {
            $update=[
                'created_by'=>Auth::id(),
                'updated_by'=>Auth::id(),
            ];

            VideoConference::where('id',$videoconference->id)->update($update);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    /**
     * Handle the videoconference "updated" event.
     *
     * @param  \App\Models\VideoConference  $videoconference
     * @return void
     */
    public function updated(VideoConference $videoconference)
    {
        //
        try
        {
            $update=[
                'updated_by'=>Auth::id(),
            ];
            
            VideoConference::where('id',$videoconference->id)->update($update);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    /**
     * Handle the videoconference "deleted" event.
     *
     * @param  \App\Models\VideoConference  $videoconference
     * @return void
     */
    public function deleted(VideoConference $videoconference)
    {
        //
    }

    /**
     * Handle the videoconference "restored" event.
     *
     * @param  \App\Models\VideoConference  $videoconference
     * @return void
     */
    public function restored(VideoConference $videoconference)
    {
        //
    }

    /**
     * Handle the videoconference "force deleted" event.
     *
     * @param  \App\Models\VideoConference  $videoconference
     * @return void
     */
    public function forceDeleted(VideoConference $videoconference)
    {
        //
    }
}