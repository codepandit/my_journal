<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class JournalController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['index', 'About']]);
    // }

    public function index(){
        $title = "Welcome to My Journal";
        return view('journals.index')->with('title', $title);
    }

    public function contact(Request $request) {
        $this->validate($request,
        [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'body' => $request->body
        );
        
        Mail::to($request->email)->send(new SendMail($data)) ;
        return redirect('/')->with('success', 'Thanks You for contacting Us');
        // Mail::send('emails.contact', $data, function($mail) use($request) {
        //     $mail->from($data['email']);
        //     $mail->to('nikhil.mehral@gmail.com')->subject('Contact Message');
        // });
        // dd($request->all());
        // return redirect()->back()->with('success', 'Thanks You for contacting Us');
        
    }
    
}
