<?php

namespace App\Http\Controllers;

use App\Models\DeliveryStatus;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StatusDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_delivery = DeliveryStatus::get();
        return view('delivery-status.index',compact('status_delivery'));
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
        DeliveryStatus::create([
            'nama_status_pengiriman' => request('nama_status_pengiriman'),
            'kode_status_pengiriman' => request('kode_status_pengiriman'),
            'informasi_status_pengiriman' => request('informasi_status_pengiriman'),            
            'tipe_status' => request('tipe_status'),            
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
        $data = DeliveryStatus::find($id);
        $request->validate([
            'nama_status_pengiriman' => 'required',
            'kode_status_pengiriman' => 'required',
            'informasi_status_pengiriman' => 'required',
            'tipe_status' => 'required'
        ]);
        $data->update([
            'nama_status_pengiriman' =>request('nama_status_pengiriman'),
            'kode_status_pengiriman' =>request('kode_status_pengiriman'),
            'informasi_status_pengiriman' =>request('informasi_status_pengiriman'),
            'tipe_status' =>request('tipe_status'),
            'status' =>request('status'),
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
        $item = DeliveryStatus::findOrFail($id);
        
        $item->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return back();
    }
}
