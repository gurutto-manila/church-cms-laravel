<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Models\User;
use Exception;
use Log;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        try
        {
            $contact = new Contact;

            $contact->fullname  = $request->fullname;
            $contact->email     = $request->email;
            $contact->mobile    = $request->mobile;
            $contact->query     = $request->query_message;

            $contact->save();

            $user=User::ByRole(3)->first();

            if(env('MAIL_STATUS') == 'on')
            {
                Mail::to($user->email)->send(new ContactMail($contact));
            }
            
            $res['success'] = 'Contact Submitted Successfully';
            return $res; 
        }
        catch(Exception $e)
        {
            Log::info($e->getMessage());
            //dd($e->getMessage());
        }  
    }
}