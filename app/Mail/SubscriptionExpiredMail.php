<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Mailtemplate;
use App\Models\Subscription;

class SubscriptionExpiredMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $queue;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscription $queue)
    {
        //
        $this->queue = $queue;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $template = Mailtemplate::where([['name','expired_approve_alert'],['status','active']])->first();
        
        $subject =  $template->subject;
        $mail_content = $template->mail_content;
      
        $mail_content = str_replace(":church_name",$this->queue->church->name,$mail_content);
        $mail_content = str_replace(":name",$this->queue->user->name,$mail_content);
        $mail_content = str_replace(":end_date",$this->queue->end_date,$mail_content);
        $mail_content = str_replace(":url",url('/pricing'),$mail_content);
      
        return $this->markdown('emails.mailcontent')
                        ->subject($subject)
                        ->with([
                            'content' => $mail_content,
                            ]);
    }
}
