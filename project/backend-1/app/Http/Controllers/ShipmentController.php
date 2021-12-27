<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use App\Models\Unit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shipment = Shipment::query()
        ->with(array('units' => function($query){
            $query->select('id','nama_satuan');
        }))->get();
        $units = Unit::all();
        // dd($units->toArray());

        return view('shipment.index',compact('units','shipment'));
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
        Shipment::create([
            'layanan' => request('layanan'),
            'kode_layanan' => request('kode_layanan'),
            'waktu_pengiriman' => request('waktu_pengiriman'),            
            'minimal' => request('minimal'),            
            'maksimal' => request('maksimal'),            
            'units_id' => request('units_id'),            
            'informasi_pengiriman' => request('informasi_pengiriman'),            
            'status' => request('status'),            
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
        $data = Shipment::find($id);
        $request->validate([
            'layanan' => 'required',
            'kode_layanan' => 'required',         
            'waktu_pengiriman' => 'required',          
            'minimal' => 'required',       
            'maksimal' => 'required',         
            'units_id' => 'required',      
            'informasi_pengiriman' => 'required',      
        ]);
        $data->update([
            'layanan' =>request('layanan'),
            'kode_layanan' =>request('kode_layanan'),
            'waktu_pengiriman' =>request('waktu_pengiriman'),
            'minimal' =>request('minimal'),
            'maksimal' =>request('maksimal'),
            'units_id' =>request('units_id'),
            'informasi_pengiriman' =>request('informasi_pengiriman'),
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
        $shipment = Shipment::findOrFail($id);
        
        $shipment->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return back();
    }
}
