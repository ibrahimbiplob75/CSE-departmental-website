<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $logger_id=Auth::id();
        $user_no=User::count();
        $user_name=Auth::user()->name;
        $admin_users=User::where("id" ,"!=",$logger_id)->get();
        return view('Backend.index',[
        'admin_users'=>$admin_users,
            'user_no'=>$user_no,
            'user_name'=>$user_name,

        ]);
    }

}
