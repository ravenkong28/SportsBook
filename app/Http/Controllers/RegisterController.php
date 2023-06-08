<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20',
            'phone' => 'required|max:13',
            'age' => 'required|numeric|max:120',
            'address' => 'required|max:255',
            'region' => 'required|max:30',
            'profile_picture' => 'mimes:jpeg,png,jpg,gif|max:15000',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('item-image');
        }
        // @dd($validatedData);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        if(User::create($validatedData)){
            return redirect('/login')->with('success', 'Registration successfull! Please login');
        }
    }
}


