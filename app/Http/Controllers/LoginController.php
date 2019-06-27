<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
        //    Set Custom Value in Session
        //     session('username','Pervej')
            return redirect()->intended('dashboard');
        }
        $request->session()->flash('message', 'Invalid Email or Password');
        return redirect()->back()->withInput(['email'=>$request->email]);
    }
}
