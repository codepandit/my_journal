<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
}
