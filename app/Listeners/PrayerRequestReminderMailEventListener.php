<?php

namespace App\Listeners;

use App\Events\PrayerRequestReminderMailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\PrayerRequestReminderMail;

class PrayerRequestReminderMailEventListener
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
     * @param  PrayerRequestReminderMailEvent  $event
     * @return void
     */
    public function handle(PrayerRequestReminderMailEvent $event)
    {
        //
        Mail::to($event->queue->to)->queue(new PrayerRequestReminderMail($event->queue));
    }
}
