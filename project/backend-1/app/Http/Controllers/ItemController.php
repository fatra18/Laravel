<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Unit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $item = Item::with('units')->get();
        $item =Item::query()
        ->with(array('units' => function($query){
            $query->select('id','nama_satuan');
        }))->get();
        // $filter = Item::select('units_id')->distinct()->get();
        // dd($item->toArray());
        $units = Unit::all();


       return view('item.index',compact('item','units'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.index',compact('units'));
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
        Item::create([
            'nama_jenis_barang' => request('nama_jenis_barang'),
            'jenis_kemasan' => request('jenis_kemasan'),
            'panjang_maksimal' => request('panjang_maksimal'),            
            'lebar_maksimal' => request('lebar_maksimal'),            
            'tinggi_maksimal' => request('tinggi_maksimal'),            
            'satuan_panjang' => request('satuan_panjang'),            
            'berat_maksimal' => request('berat_maksimal'),            
            'units_id' => request('units_id'),            
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
        $data = Item::find($id);
        $request->validate([
            'nama_jenis_barang' => 'required',
            'jenis_kemasan' => 'required',         
            'panjang_maksimal' => 'required',          
            'lebar_maksimal' => 'required',       
            'tinggi_maksimal' => 'required',         
            'satuan_panjang' => 'required',      
            'berat_maksimal' => 'required',      
            'units_id' =>'required',
        ]);
        $data->update([
            'nama_jenis_barang' =>request('nama_jenis_barang'),
            'jenis_kemasan' =>request('jenis_kemasan'),
            'panjang_maksimal' =>request('panjang_maksimal'),
            'lebar_maksimal' =>request('lebar_maksimal'),
            'tinggi_maksimal' =>request('tinggi_maksimal'),
            'satuan_panjang' =>request('satuan_panjang'),
            'berat_maksimal' =>request('berat_maksimal'),
            'units_id' =>request('units_id'),
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
        $item = Item::findOrFail($id);
        
        $item->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return back();
    }
}
