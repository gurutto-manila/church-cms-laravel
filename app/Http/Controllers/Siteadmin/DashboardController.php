<?php

namespace App\Http\Controllers\Siteadmin;

use App\Http\Controllers\Controller;

/**
 * DashboardController
 *
 * Displays siteadmin dashboard and system statistics.
 * Provides overview of system-wide metrics and management interface.
 * Main entry point for siteadmin area of the application.
 *
 * @package App\Http\Controllers\Siteadmin
 */
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site_admin.dashboard');
    }
}
