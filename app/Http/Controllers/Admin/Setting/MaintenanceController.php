<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Traits\SettingProcess;
use Illuminate\Http\Request;
use Exception;
use Log;

/**
 * MaintenanceController
 *
 * Manages church system maintenance settings and mode.
 * Handles enabling/disabling maintenance mode for the application.
 * Uses SettingProcess trait for settings configuration.
 *
 * @package App\Http\Controllers\Admin\Setting
 */
class MaintenanceController extends Controller
{
    use SettingProcess;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.settings.maintenancesettings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        try
        {
            if($request->maintenance==1)
            {
                $maintenance=$request->maintenance;
            }
            if($request->register==1)
            {
                $register=$request->register;
            }
            if($request->login_status==1)
            {
                $login_status=$request->login_status;
            }

            $this->updatesettings('maintenance',$maintenance);
            $this->updatesettings('register',$register);
            $this->updatesettings('login_status',$login_status);

            return redirect()->back();
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());

        }
    }
}
