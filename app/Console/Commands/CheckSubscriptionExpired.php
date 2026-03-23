<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Exception;
use App\Models\Subscription;
use App\Events\AfterSubscriptionExpiredEvent;
use Log;

class CheckSubscriptionExpired extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gego:checksubscriptionexpired';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Subscription Expired';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try
        {
            $now = date('Y-m-d',strtotime('+7 days'));
                $queuelist = Subscription::where('status','=','approve')->whereDate('end_date',$now)->get();
              
                foreach($queuelist as $queue)
                {
                    if(env('MAIL_STATUS') == 'on')
                    {
                        $update['status']='expired';
                        Subscription::where('id',$queue->id)->update($update);
                            
                        event(new AfterSubscriptionExpiredEvent($queue));
                    }
                }
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            // dd($e->getMessage());
        }
    }
}