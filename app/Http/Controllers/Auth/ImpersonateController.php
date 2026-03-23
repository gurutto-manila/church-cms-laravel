<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\User;
use Exception;
use Log;

class ImpersonateController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function impersonate($id)
    {
        try
        {
            $user = User::find($id);
              
            $is_admin = $this->is_admin($user->id);
            if($is_admin == false)
            { 
                Auth::user()->setImpersonating($user->id);
            }
            else
            {
                \Session::put('Impersonate disabled for this user.');
            }

            return redirect('/preacher/dashboard');
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stopImpersonate()
    {  
        try
        {      
            $user = User::where('id', Auth::user()->id)->first();
            Auth::user()->stopImpersonating();
            
            return redirect('/admin/dashboard');
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        } 
    }
}