<?php
namespace App\Traits;

use App\Models\Setting;
use Exception;
use Log;

trait SettingProcess
{
    public function updatesettings($key,$value)
    {
    	try
    	{
	        $setting = Setting::where('key',$key)->first();
	        $setting->value = $value;
	        $setting->save();

	        return $setting;
	    }
	    catch(Exception $e)
	    {
            Log::info($e->getMessage());
	    	//dd($e->getMessage());
	    }
	}
}