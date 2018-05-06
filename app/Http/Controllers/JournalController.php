<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index(){
        $title = "Welcome to My Journal";
        return view('blogs.index')->with('title', $title);
    }

    public function about(){
        $title = "About the Cira Blog";
        return view('blogs.about')->with('title', $title);
    }

    
}
