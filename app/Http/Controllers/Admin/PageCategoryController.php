<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\PageCategory as PageCategoryResource;
use App\Http\Requests\PageCategoryRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\PageCategory;
use App\Traits\LogActivity;
use App\Helpers\SiteHelper;
use App\Traits\Common;
use App\Models\User;
use Exception;
use Log;

class PageCategoryController extends Controller
{
    //
    use LogActivity;
    use Common;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        //
        $category = PageCategory::where([
            ['church_id',Auth::user()->church_id],
            ['status',1],
        ])->get();
        $category = PageCategoryResource::collection($category);

        return $category;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageCategoryRequest $request)
    {
        //
        try
        {
            $category = new PageCategory;

            $category->church_id        = Auth::user()->church_id;
            $category->name        		= strtolower(str_replace(' ', '_', $request->name));
            $category->status           = 1;

            $category->save();

            $message = trans('messages.add_success_msg',['module' => 'Page Category']);

            $ip= $this->getRequestIP();
            $this->doActivityLog(
                $category,
                Auth::user(),
                ['ip' => $ip, 'details' => $_SERVER['HTTP_USER_AGENT'] ],
                LOGNAME_ADD_PAGE_CATEGORY,
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