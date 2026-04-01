<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Church;

/**
 * AboutController
 *
 * Manages public-facing about and policy pages for the church website.
 * Displays church information, privacy policy, and other informational pages.
 *
 * @package App\Http\Controllers
 */
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $church = Church::where('id',Auth::user()->church_id)->first();

        return view('/about',['church'=>$church]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/privacypolicy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('/swotanalysis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('/pages/terms');
    }
}
