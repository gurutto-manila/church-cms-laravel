<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $contacts = Contact::where('church_id',Auth::user()->church_id);
        if(\Request::getQueryString() != null)
        {
            if($request->search != null)
            {
                $contacts = $contacts->where('fullname','LIKE','%'.$request->search.'%')->orWhere('email','LIKE','%'.$request->search.'%')->orWhere('mobile','LIKE','%'.$request->search.'%')->orWhere('query','LIKE','%'.$request->search.'%');
            }
        }
        $contacts = $contacts->paginate(10);

        return view('/admin/contact/index', ['contacts' => $contacts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contact = Contact::where('id',$id)->first();

        return view('/admin/contact/show' , ['contact' => $contact]);
    }
}