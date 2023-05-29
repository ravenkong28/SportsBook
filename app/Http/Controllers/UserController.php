<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request){
        User::create($request->all());
        return view('outer-home');
    }

    public function user_detail(){
        return view('my-account',[
            "users" => User::all()
        ]);
    }

    public function update_profile(){
        $users = User::get();
        return view('edit-profile', ['users'=>$users]);
    }
}
