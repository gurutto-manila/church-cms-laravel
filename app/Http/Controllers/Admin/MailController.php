<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestSendMailRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ListingMail;
use App\Models\Email;
use Exception;
use Log;

class MailController extends Controller
{
    public function store(TestSendMailRequest $request)
    {
        try
        {
            $email=Email::where('id',$request->id)->first();

            Mail::to($request->to_email)->queue(new ListingMail($email->subject,$email->from_email,$email->from_name,$email->reply_to_email,$email->content));   

            $res['message'] = "Test Mail Send Successfully";
            return $res;
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        } 
    }
}