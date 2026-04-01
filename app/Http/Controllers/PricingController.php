<?php

namespace App\Http\Controllers;

use App\Models\Plan;

/**
 * PricingController
 *
 * Displays subscription pricing and plan information to potential customers.
 * Shows available subscription plans and pricing tiers for the church CMS platform.
 *
 * @package App\Http\Controllers
 */
class PricingController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $plan = Plan::get();
        return view('/pricing',['plans' => $plan]);
    }
}
