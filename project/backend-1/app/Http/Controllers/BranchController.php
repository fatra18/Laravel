<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = Branch::with(['provinces.regencies.districts.villages'])->get();
        // dd($branch->toArray());
        return view('branch.index',compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = Branch::get();

        return view('branch.contoh',compact('branch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->all();
        Branch::create([
            'nama_cabang' => request('nama_cabang'),
            'kode_cabang' => request('kode_cabang'),
            'telpon_cabang' => request('telpon_cabang'),
            'email_cabang' => request('email_cabang'),
            'alamat_cabang' => request('alamat_cabang'),
            'provinces_id' => request('provinces_id'),
            'regencies_id' => request('regencies_id'),
            'districts_id' => request('districts_id'),
            'villages_id' => request('villages_id'),
            'jenis_kantor' => request('jenis_kantor'),
        ]);
        Alert::success('Success Title', 'Success Message');    
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
