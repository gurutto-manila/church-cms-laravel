<?php
/**
 * Trait for processing NewsletterProcess
 */
namespace App\Traits;

use App\Traits\LogActivity;
use App\Models\NewsLetter;
use App\Traits\Common;
use App\Models\User;
use Exception;
use Log;

/**
 *
 * @class trait
 * Trait for NewsletterProcess Processes
 */
trait NewsletterProcess
{
    public function subscribeNewsletter($data , $church_id , $user , $admin)
    {
        try
        {  
            $user = User::where('name',$user->name)->first();
            $newsletter = NewsLetter::where('email',$user->email)->first();

            if($newsletter != null)
            {
                if($newsletter->status == 0)
                {
                    $status = 1;
                }
                if($newsletter->status == 1)
                {
                    $status = 0;
                }
             
                $newsletter->status = $status;

                $newsletter->save();
            }
            else
            {
                $newsletter = new NewsLetter;

                $newsletter->church_id  = $church_id;
                $newsletter->name       = $user->name;
                $newsletter->email      = $user->email;
                $newsletter->status     = 1;

                $newsletter->save();
            }

            $message = 'NewsLetter Status Updated Successfully';

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $newsletter,
                $admin,
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_CHANGE_NEWSLETTER_STATUS,
                $message,
            ); 

            $res['success'] = $message;
            return $res;  
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
}