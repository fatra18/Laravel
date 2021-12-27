<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function home(){
        return view('home');
    }

    public function users(){
        return view('users');
    }
    public function product(){
        return view('product');
    }
}
