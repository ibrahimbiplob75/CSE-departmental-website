<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminUserController extends Controller
{
    function index(){
        $logger_id=Auth::id();
        $admin_users=User::where("id" ,"!=",$logger_id)->get();
        $students=User::where('category','student')->get();
        $block_users=User::onlyTrashed()->get();
        return view('Admin.index', data: [

            'admin_users'=>$admin_users,
            'students'=>$students,
            'block_users'=>$block_users,

        ]);
    }
    function teacher(){
        $teachers=User::where('category','teacher')->get();
        return view('Admin.teacher',[
            'teachers'=>$teachers,
        ]);
    }
    function admin_block($user_id){
        User::find($user_id)->delete();
        return redirect('/dashboard')->with('block','User has been Blocked');
    }
    function admin_unblock($user_id){
        User::onlyTrashed()->find($user_id)->restore();
        return redirect('/dashboard')->with('restore','Admin User Restore Successfully');
    }
    function admin_delete($user_id){
        User::onlyTrashed()->find($user_id)->forceDelete();
        return redirect('/dashboard')->with('delete','User has permanently Deleted');
    }
}
