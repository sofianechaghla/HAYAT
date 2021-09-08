<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('/');
    }
    public function Sendmail (Request $request)
    {
$details=[
    'name' =>$request->name,
    'phone' =>$request->phone,
    'email' =>$request->email,
    'message' =>$request->message
];

Mail::to('chaghlasofiane@outlook.fr')->send(new ContactMail($details));
return redirect()->route('home')->with('message_sent','Your message has been sent successfully!');
    }
}
