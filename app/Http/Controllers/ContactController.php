<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contactForm(){
        return view('contact');
    }

    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg
        ];
        Mail::to('abunoman603@gmail.com')->send(new ContactMail($details));
        return back()->with('Mail_sent','Message Sent! We will get back to you soon...');
    }
}
