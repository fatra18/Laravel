<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit = Unit::get();
        return view('unit.index',compact('unit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Unit::create([
            'nama_satuan' => request('nama_satuan'),
            'kode_satuan' => request('kode_satuan'),
        ]);
        Alert::success('Berhasil Tambah Data', 'Success Message');    
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
        $data = Unit::find($id);
        $request->validate([
            'nama_satuan' => 'required',
            'kode_satuan' => 'required'
        ]);
        $data->update([
            'nama_satuan' =>request('nama_satuan'),
            'kode_satuan' =>request('kode_satuan'),
            'status' => request('status'),
          
            ]);
            Alert::info('Berhasil Ubah Data', 'Success Message');    
            return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Unit::findOrFail($id);
        
        $payment->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return back();
    }
}
