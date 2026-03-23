<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\PrayerRequest;
use App\Models\User;
use Exception;
use Log;

class CheckPrayer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gego:checkprayer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Prayer';

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
     * @return int
     */
    public function handle()
    {
        try
        {
            $prayers = PrayerRequest::where('status','approve')->where('date','<',date('Y-m-d H:i:s'))->get();

            foreach($prayers as $prayer)
            {
                $prayerrequest = PrayerRequest::where('id',$prayer->id)->first();

                $prayerrequest->status = 'closed';

                $prayerrequest->save();
            }        
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
}