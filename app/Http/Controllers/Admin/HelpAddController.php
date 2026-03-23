<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\HelpRepositoryInterface;
use App\Http\Requests\HelpAddRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\LogActivity;
use App\Traits\Common;
use App\Models\Help;
use Exception;
use Log;

class HelpAddController extends Controller
{
    use LogActivity;
    use Common;

    public function __construct(HelpRepositoryInterface $help)
    {
        $this->help = $help;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('/admin/helps/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HelpAddRequest $request)
    {
        //
        try
        {
            $help=$this->help->createHelp(Auth::user()->church_id,$request);
            /*$help = new Help;

            $help->church_id        = Auth::user()->church_id;
            $help->user_id          = Auth::id();
            $help->title            = $request->title;
            $help->description      = $request->description;
            $help->contact_details  = $request->contact_details;
            $help->status           = "pending";
            
            $help->save();*/


            $message = 'Help Added Successfully';

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $help,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADD_HELP,
                $message
            );

            $res['success'] = $message;
            return $res;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        } 
    }
}
