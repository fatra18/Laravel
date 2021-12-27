<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function home(){
        return view('home');
    }
    
    public function login(){
        
        return view('login');
    }

    public function authenticate(Request $request )
    {
        $credentials = request()->only(['email','password']);
        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();
            
            return redirect()->intended('/home');
        }

        return back()->with([
            'error' => 'gagal login'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/login');
    }
}
