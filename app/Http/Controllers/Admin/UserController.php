<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role_user;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.users')->with('users',$users);
    }

    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user_update')->with('user',$user);
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function add_role($user_id,$role_id)
    {
        Role_user::create([
            'user_id'=>$user_id,
            'roles_id'=>$role_id
        ]);
        return redirect()->back();
    }

    public function delete_role($user_id,$role_id)
    {
        Role_user::where('user_id',$user_id)->where('roles_id',$role_id)->first()->delete();
        return redirect()->back();
    }
}
