<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    function view(){
        return view('Frontend.index');
    }
    function index(){
        return view('Frontend.index');
    }
    function contact(){
        return view('Frontend.contact');
    }
    function my_profile(){
        return view('Frontend.my_profile');
    }
}
