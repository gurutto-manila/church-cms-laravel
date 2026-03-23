<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FaqCategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\FaqCategory;
use App\Traits\LogActivity;
use App\Traits\Common;
use Exception;
use Log;

class FaqCategoryController extends Controller
{
    use LogActivity;
    use Common;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FaqCategoryRequest $request)
    {
        //
        try
        {
            $category = new FaqCategory;

            $category->church_id    =   Auth::user()->church_id;
            $category->name         =   $request->name;
            $category->status       =   1;

            $category->save();

            $message = 'Faq Category Added Successfully';

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $category,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADD_FAQ_CATEGORY,
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