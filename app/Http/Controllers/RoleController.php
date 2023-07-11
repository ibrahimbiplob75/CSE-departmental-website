<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function role_permissions(){
        $permission_names=permission::all();
        $roles=Role::all();
        return view('role.role',[
            'permission_names'=>$permission_names,
            'roles'=>$roles,
        ]);
    }
    function user_role(){
        $permission_names=permission::all();
        $roles=Role::all();
        $users=User::all();
        return view('role.user_role',[
            'permission_names'=>$permission_names,
            'roles'=>$roles,
            'users'=>$users,
        ]);
    }

    function user_role_assign(request $request){
        $user=User::find($request->user_id);
        $user->assignRole($request->user_role);
        return back();
    }

    function role_edit($role_id){
        $user=User::find($role_id);
        $permission_names=permission::all();
        return view('role.edit_role',[
            'user'=>$user,
            'permission_names'=>$permission_names,
        ]);
    }


    function role_permission(request $request){
        $permission = Permission::create(['name' =>$request->permission_name]);
        return back();
    }
    function role_assign(request $request){
        $role = Role::create(['name' => $request->role_name]);
        $role->givePermissionTo($request->permission);
        return back();
    }
    function role_update(request $request){
        $user=User::find($request->user_id);
        $user->syncPermissions($request->permission);
        return back();
    }
}
