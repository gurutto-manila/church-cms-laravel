<?php

namespace App\Http\Controllers\Api;

use App\Events\Notification\SingleNotificationEvent;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\SiteHelper;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Traits\Common;
use App\Models\Church;
use App\Models\User;
use Exception;
use Log;

class ContactController extends Controller
{
    use Common;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function userStore(ContactRequest $request)
    {
        try
        {
            //$church = Church::where('slug','=',$slug)->first();

            $contact = new Contact;

            $contact->church_id             = Auth::user()->church_id;
            $contact->fullname              = $request->fullname;
            $contact->email                 = $request->email;
            $contact->mobile                = $request->mobile;
            $contact->query                 = $request->query_message;
            $contact->date_of_submission    = date('Y-m-d H:i:s');

            $array = [];

            $array['ip'] = $this->getRequestIP();
            $array['details'] = $_SERVER['HTTP_USER_AGENT'];

            $contact->properties = $array;

            $contact->save();

            $user = User::ByRole(3)->first();

            if(env('MAIL_STATUS') == 'on')
            {
                //Mail::to($user->email)->send(new ContactMail($contact));
            }

            if($contact != null)
            {
                $success = true;
                $message = 'Contact Submitted Successfully';

                 $array = [];
                 $admin = SiteHelper::getAdmin(Auth::user()->church_id);
                 $array['user']     =$admin ;
                 $array['details']  = 'New Contact Received';

                 event(new SingleNotificationEvent($array));
            }
            else
            {
                $success = false;
            }

            return response()->json([
                'status'    =>  $success,
                'message'   =>  $message,
            ], 200);
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }  
    }
}