<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MailingListSubscriberRequest;
use App\Models\MailinglistSubscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\LogActivity;
use App\Models\MailingList;
use App\Traits\Common;
use Exception;
use Log;

class MaillistSubscriberController extends Controller 
{
    use LogActivity;
    use Common;

    public function create($id) 
    {
        if($_SERVER['HTTP_REFERER'] != null)
        {
            $prev_url = $_SERVER['HTTP_REFERER'];
        }
        else
        {
            $prev_url = url('/admin/subscriber/show/'.$id);
        }
        
        return view('/admin/subscriber/attachmaillist',['subscriber_id' => $id , 'prev_url' => $prev_url]);
    }

    public function store(MailingListSubscriberRequest $request,$id)
    {
        try
        {
            $maillistsubscriber=new MailinglistSubscriber;

            $maillistsubscriber->mailing_list_id  = $request->mailinglist_id;
            $maillistsubscriber->subscribers_id   = $request->subscriber_id;

            $maillistsubscriber->save();

            $message = 'MailingList Attached To Subscriber Successfully';

            $ip = $this->getRequestIP();
            $this->doActivityLog(
                $maillistsubscriber,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ATTACH_MAILINGLIST_TO_SUBSCRIBER,
                $message
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