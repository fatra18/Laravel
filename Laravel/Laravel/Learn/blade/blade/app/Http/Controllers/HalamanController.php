<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function santri()
    {
        return view("santri");
    }

    public function guru()
    {
        return view("guru");
    }

    public function contact()
    {
        return view("v_contact");
    }


}
