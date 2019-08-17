<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    function index(){
        return view("contact");
    }

    function store(Request $request){
        $request->validate([
            'subject' => 'required',
            'from' => 'required|email',
            'content' => 'required'
        ]);
        Mail::send(new ContactMail($request));
        \Session::flash('success', "Email Sent! I'll try to respond ASAP!");
        return back();
    }
}
