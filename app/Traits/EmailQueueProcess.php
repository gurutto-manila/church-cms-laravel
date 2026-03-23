<?php
/**
 * Trait for processing common
 */
namespace App\Traits;

use App\Models\MailinglistSubscriber;
use App\Models\CampaignEmail;
use App\Models\MailingList;
use App\Models\Subscribers;
use App\Models\MailQueue;
use App\Models\Campaign;
use App\Models\Email;
use Carbon\Carbon;
use Exception;
use log;
/**
 *
 * @class trait
 * Trait for Common Processes
 */
trait EmailQueueProcess
{
    public static function createEmailQueue($mailinglistSubscriber,$request)
    {
        $mailqueue=[];
        try
        {
            if($mailinglistSubscriber->status==1)
            {
                $mailqueue = EmailQueueProcess::makeEmailQueue($mailinglistSubscriber->subscribers_id,$mailinglistSubscriber->mailing_list_id);

                return $mailqueue;
            }
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    public static function makeEmailQueue($subscriber_id,$mailinglist_id)
    {
        $mailqueue=[];
        try
        {
            $data = [];

            $data['subscriber_id']  =   $subscriber_id;
            $data['mailinglist_id'] =   $mailinglist_id;
            $data['campaign_id']    =   $campaign->id;
            $data['to_mail']        =   $subscriber->email;

            $campaign   =   Campaign::where('mailinglist_id',$mailinglist_id)->first();//reln
            $subscriber =   Subscribers::where('id',$subscriber_id)->first();
            $emails     =   CampaignEmail::where('campaign_id',$campaign->id)->get();//reln
       
            if(count($emails)>0) 
            {
                foreach($emails as $campaignemail)
                {
                    $data['email_id']       =   $campaignemail->email_id;
                    $data['subject']        =   optional($campaignemail->email)->subject;
                    $data['from_email']     =   optional($campaignemail->email)->from_email;
                    $data['from_name']      =   optional($campaignemail->email)->from_name;
                    $data['reply_to_email'] =   optional($campaignemail->email)->reply_to_email;
                    //Replace
                    $content =  optional($campaignemail->email)->content;
                    $content =  str_replace(':firstname',$subscriber->firstname,$content);
                    $content =  str_replace(':lastname',$subscriber->lastname,$content);
                    //$url = url('/unsubscribe/'.$this->slug);
                    //"url=automailer.test/unsubscribe/demo-mailing-list?email=abc@aa.com"
                    $url=url('/unsubscribe/'.$campaign->mailinglist->slug.'?email='.$subscriber->email);

                    $content=str_replace(':unsubscribelink',$url,$content);
                    //  $data['content']=optional($campaignemail->email)->content;
                    $data['content']=$content;
                    //  $data['scheduled_at']=Carbon::now()->addHours($campaignemail->delay_in_hours);
                    $data['scheduled_at']=$campaignemail->ScheduleAt();

                    $mailqueue = MailQueue::create($data);
                }
            }
            return $mailqueue;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    } 

    public static function createEmailQueueforCampaignemail($campaignemail,$request)
    {
        $mailqueue=[];
        try
        {
            $data=array();

            $data['email_id']=$campaignemail->email_id;
            //  $data['scheduled_at']=Carbon::now()->addHours($campaignemail->delay_in_hours);
            $data['scheduled_at']=$campaignemail->ScheduleAt();
            $data['campaign_id']=$campaignemail->campaign_id;
            //dump($data['campaign_id']);
            $campaign=Campaign::where('id',$campaignemail->campaign_id)->first();
            //dump($campaign);
            $email=Email::where('id',$campaignemail->email_id)->first();

            $data['subject']=$email->subject;
            $data['from_email']=$email->from_email;
            $data['from_name']=$email->from_name;
            $data['reply_to_email']=$email->reply_to_email;
            // $data['content']=$email->content;
            $data['mailinglist_id']=$campaign->mailinglist_id;
            $mailinglist=MailinglistSubscriber::where('mailinglist_id',$campaign->mailinglist_id)->where('status','1')->get();

            if(count($mailinglist)>0)
            {
                foreach($mailinglist as $subscriber)
                {  
                    //Replace
                    $content=$email->content;
                    $content= str_replace(':firstname',$subscriber->subscriber->firstname,$content);
                    $content= str_replace(':lastname',$subscriber->subscriber->lastname,$content);
                    $url=url('/unsubscribe/'.$campaign->mailinglist->slug.'?email='.$subscriber->email);
                    $content=str_replace(':unsubscribelink',$url,$content);

                    $data['content']=$content;

                    $data['subscriber_id']=$subscriber->subscriber->id;           
                    $data['to_mail']=$subscriber->subscriber->email;
                    $mailqueue = MailQueue::create($data);
                }
            }
            return $mailqueue;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    public static function deattchEmailQueueforCampaignemail($campaignemail,$request)
    {
        try 
        {
            $mailqueue=[];
    
            $mailqueue = MailQueue::where([['email_id',$campaignemail->email_id],['campaign_id',$campaignemail->campaign_id]])->whereNull('deleted_at')->delete();

            return $mailqueue;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            // dd($e->getMessage());
        }
    }

    public static function deleteEmailQueueforCampaign($campaign,$request)
    {
        try 
        {
            $mailqueue=[];
    
            $mailqueue = MailQueue::where('campaign_id',$campaign->id)->whereNull('deleted_at')->delete();

            return $mailqueue;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            // dd($e->getMessage());
        }
    }

    public static function deleteEmailQueueforSubscribers($subscriber,$request)
    {
        try 
        {
            $mailqueue=[];
 
            $mailqueue = MailQueue::where('subscriber_id',$subscriber->id)->whereNull('deleted_at')->delete();

            return $mailqueue;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            // dd($e->getMessage());
        }
    }

    public static function  deleteEmailQueueforMailinglistSubscriber($mailingslistSubscriber,$request)
    {
        try 
        {
            $mailqueue=[];
    
            $mailqueue = MailQueue::where('mailinglist_id',$mailingslistSubscriber->mailinglist_id)->whereNull('deleted_at')->delete();

            return $mailqueue;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            // dd($e->getMessage());
        }
    }
  
    public static function createEmailQueueafterConfirm($mailinglist_id,$subscriber_id)
    {
        $mailqueue=[];
        try
        {
            EmailQueueProcess::makeEmailQueue($subscriber_id,$mailinglist_id);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            // dd($e->getMessage());
            return $mailqueue;
        }
    }
}