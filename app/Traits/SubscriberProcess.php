<?php
/**
 * Trait for processing common
 */
namespace App\Traits;

use App\Models\MailingList;
use App\Models\Subscribers;
use Exception;
use Log;

/**
 *
 * @class trait
 * Trait for Common Processes
 */
trait SubscriberProcess
{
    public  function createSubscriberAttachToMailingList($slug,$request,$church_id)
    {
        $subscriber=[];
        try
        {
            $subscriber = Subscribers::where('email',$request->email)->first();
            if(count($subscriber)==0)
            {
                $subscriber = Subscribers::create([
                    'church_id' =>  $church_id,
                    'firstname' =>  $request->firstname,
                    'lastname'  =>  $request->lastname,
                    'email'     =>  $request->email,
                    'aff'       =>  $request->aff,
                    'source'    =>  $request->source,
                    'active'    =>  $request->active,
                ]);

                $mailinglist = MailingList::where('slug',$slug)->first();

                $mailinglist->subscribers()->attach($subscriber->id);

                $mailinglist->save(); 
            }
            return $subscriber;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }   
}