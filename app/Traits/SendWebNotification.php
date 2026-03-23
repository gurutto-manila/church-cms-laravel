<?php
namespace App\Traits;

use App\Events\Notification\SingleNotificationEvent;
use App\Models\User;
use Exception;
use Log;

trait SendWebNotification

{
   /**
    * Store a newly created for user details in storage.
    * @param array $data
    * @return array
    */

   public function addNotification($data,$user)
   {

   	                 $array = [];

                     $array['user']     = $user;
                     $array['details']  = $data['message'];

                     event(new SingleNotificationEvent($array));
     // Notification::send($user, new NewMessageNotification($message));
    }
}