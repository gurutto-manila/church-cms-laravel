<?php

namespace App\Listeners\Notification;

use App\Events\Notification\SingleNotificationEvent;
use App\Notifications\NewMessageNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Notification;

class SingleNotificationEventListener
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
     * @param  SingleNotificationEvent  $event
     * @return void
     */
    public function handle(SingleNotificationEvent $event)
    {
        //
        Notification::send($event->data['user'], new NewMessageNotification($event->data['details']));
    }
}
