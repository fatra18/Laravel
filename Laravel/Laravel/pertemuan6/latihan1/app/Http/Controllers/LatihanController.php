<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index($id,$id1){
        // dd($id===$id1);
        return redirect()->route('create');
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request, $id1,$id2,$id3)
    {
        dd($id1.$id2.$id3);

    }

    public function update()
    {

    }
    public function delete()
    {

    }

    public function tes($nama)
    {
        dd($nama);
    }

}
