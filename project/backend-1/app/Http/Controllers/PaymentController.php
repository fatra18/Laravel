<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use function GuzzleHttp\Promise\all;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = Payment::get();
        return view('payment.index',compact('payment'));
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
        Payment::create([
            'nama_jenis_pembayaran' => request('nama_jenis_pembayaran'),
            'kode_jenis_pembayaran' => request('kode_jenis_pembayaran'),
            'informasi_jenis_pembayaran' => request('informasi_jenis_pembayaran'),
            'tipe_status' => request('tipe_status'),
            'status' => request('status'),
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
        $payment = Payment::findOrFail($id);
        dd($payment);
        // return view('payment.index',compact('payment'));
        
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
        $data = Payment::find($id);
        $request->validate([
            'nama_jenis_pembayaran' => 'required',
            'kode_jenis_pembayaran' => 'required',
            'informasi_jenis_pembayaran' => 'required',
            'tipe_status' => 'required',
            
        ]);
        $data->update([
            'nama_jenis_pembayaran' =>request('nama_jenis_pembayaran'),
            'kode_jenis_pembayaran' => request('kode_jenis_pembayaran'),
            'informasi_jenis_pembayaran' => request('informasi_jenis_pembayaran'),
            'tipe_status' => request('tipe_status'),
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
        $payment = Payment::findOrFail($id);
        
        $payment->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return back();
        
    }
}
