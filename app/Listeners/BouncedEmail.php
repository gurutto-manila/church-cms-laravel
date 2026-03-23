<?php

namespace App\Listeners;

use jdavidbakr\MailTracker\Events\PermanentBouncedMessageEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BouncedEmail
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
     * @param  PermanentBouncedMessageEvent  $event
     * @return void
     */
    public function handle(PermanentBouncedMessageEvent $event)
    {
        //
    }
}
