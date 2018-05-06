<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index(){
        $title = "Welcome to My Journal";
        return view('journals.index')->with('title', $title);
    }

    public function about(){
        $title = "About My Journal";
        return view('journals.about')->with('title', $title);
    }

    // public function journal(){
    //     $title = "This is journal post section";
    //     return view('posts.index')->with('title', $title);
    // }
    
}
