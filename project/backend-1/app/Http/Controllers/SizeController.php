<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size = Size::get();
        return view('size.index',compact('size'));
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
        Size::create([
            'nama_jenis_ukuran' => request('nama_jenis_ukuran'),
            'minimal_panjang_diameter' => request('minimal_panjang_diameter'),
            'minimal_lebar' => request('minimal_lebar'),            
            'minimal_tinggi' => request('minimal_tinggi'),            
            'maksimal_panjang_diameter' => request('maksimal_panjang_diameter'),            
            'maksimal_lebar' => request('maksimal_lebar'),            
            'maksimal_tinggi' => request('maksimal_tinggi'),            
            'satuan_panjang' => request('satuan_panjang'),            
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
        $data = Size::find($id);
        $request->validate([
            'nama_jenis_ukuran' => 'required',
            'minimal_panjang_diameter' => 'required',         
            'minimal_lebar' => 'required',          
            'minimal_tinggi' => 'required',       
            'maksimal_panjang_diameter' => 'required',         
            'maksimal_lebar' => 'required',      
            'maksimal_tinggi' => 'required',      
            'satuan_panjang' =>'required',
        ]);
        $data->update([
            'nama_jenis_ukuran' =>request('nama_jenis_ukuran'),
            'minimal_panjang_diameter' =>request('minimal_panjang_diameter'),
            'minimal_lebar' =>request('minimal_lebar'),
            'minimal_tinggi' =>request('minimal_tinggi'),
            'tinggi_maksimal' =>request('tinggi_maksimal'),
            'maksimal_panjang_diamete' =>request('satuan_panjang'),
            'maksimal_lebar' =>request('maksimal_lebar'),
            'maksimal_tinggi' =>request('maksimal_tinggi'),
            'satuan_panjang' => request('satuan_panjang'),
          
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
        $size = Size::findOrFail($id);
        
        $size->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return back();
    }
}
