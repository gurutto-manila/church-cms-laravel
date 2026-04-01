<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;

/**
 * HomeController
 *
 * Displays the member dashboard and home page.
 * Only accessible to authenticated members with 'auth' middleware.
 * Provides home interface and navigation for member area.
 *
 * @package App\Http\Controllers\Member
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
