<?php

namespace App\Listeners;

use jdavidbakr\MailTracker\Events\ComplaintMessageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailComplaint
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ComplaintMessageEvent  $event
     * @return void
     */
    public function handle(ComplaintMessageEvent $event)
    {
        //
           //dump($event->sent_email->id);
    }
}
