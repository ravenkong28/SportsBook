<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index()
    {
        return view('login',[
            "title"=>"Log In Your Account"
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:20'
        ]);
        // @dd($credentials);

        if(Auth::attempt($credentials)){
            if($request->rememberMe){
                Cookie::queue('email',$credentials['email'],10080);
                Cookie::queue('password',$credentials['password'],10080);
            }
            $request->session()->regenerate();
            // dd(auth()->user()->name);
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Invalid Credential!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        
    }
}
