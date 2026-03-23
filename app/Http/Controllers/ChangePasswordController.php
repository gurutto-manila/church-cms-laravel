<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ChangePassword;
use App\Models\Email;
use App\Models\User;
use Exception;
use Hash;
use Log;

class ChangePasswordController extends Controller
{
    public function ChangePassword()
    {
        return view('/admin/changepassword');
    }

    public function updateChangePassword(ChangePasswordRequest $request)
    {
        try
        {
            $user = User::find(Auth::id());
            $hashedPassword = $user->password;
            $user->password = Hash::make($request->newpassword);
            $user->save();
            if( (env(MAIL_STATUS) == 'on') && ($user->email != null) ) 
            {
                Mail::to($user->email)->queue(new ChangePassword($user));
            }

            $res['message']= 'Password Updated';
            return $res;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }
    }
}