<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Spatie\Analytics\Period;
use Exception;
use Analytics;

class GoogleAnalyticsController extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        
    }

    /**
     * Show the application google analytics.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $mostVisitedpage = Analytics::fetchMostVisitedPages(Period::days(7));
        $pageViews = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $referrer = Analytics::fetchTopReferrers(Period::days(7));
        $userType = Analytics::fetchUserTypes(Period::days(7));
        $browsers = Analytics::fetchTopBrowsers(Period::days(7));
        
        return view('/admin/analytics/index',['mostVisitedpage' => $mostVisitedpage, 'pageViews' => $pageViews, 'referrer' => $referrer, 'userType' => $userType, 'browsers' => $browsers ]);
    }

}