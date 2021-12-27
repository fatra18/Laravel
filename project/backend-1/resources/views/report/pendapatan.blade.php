@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Note Page</h1>
  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex align-items-center">
          <h6 class="m-0 font-weight-bold text-primary w-100">DataTables Note</h6>
          <div class="d-flex justify-content-end w-100">
            <div class="bg-primary px-5 py-1 rounded-pill mr-3">
                <a 
                    href="" 
                    class="text-white text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal">
                    <i 
                        class="fas fa-plus-circle">
                    </i>
                    Tambah Catatan
                </a>
            </div>
            <div class="bg-success px-3 py-1 rounded dropdown d-flex align-items-center">
                <a  href="" 
                    class="text-white text-decoration-none"
                    id="dropdownMenuLink" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false">
                    <i class="fas fa-file "></i>
                    Export & Import
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Export</a></li>
                    <li><a class="dropdown-item" href="#">Import</a></li>
                </ul>
            </div>
          </div>  
      </div>
      <div class="card-body row">

        
          
         
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Tanggal Dibuat</th>
                          <th>Nama Pengirim</th>
                          <th>Telepon Pengirim</th>
                          <th>Email Pengirim</th>
                          <th>Alamat Pengirim</th>
                          <th>Provinsi Pengirim</th>
                          <th>Kota Pengirim</th>
                          <th>Kecamatan Pengirim</th>
                          <th>Catatan Pengirim</th>
                          <th>Nama Penerima</th>
                          <th>Telepon Penerima</th>
                          <th>Alamat Penerima</th>
                          <th>Provinsi Penerima</th>
                          <th>Kota Penerima</th>
                          <th>Kecamatan Penerima</th>
                          <th>Tipe Pelanggan</th>
                          <th>Nomor Tracking</th>
                          <th>Nama Jenis Barang</th>
                          <th>Dimensi</th>
                          <th>Dimensi Aktual</th>
                          <th>Berat</th>
                          <th>Berat Aktual</th>
                          <th>Layanan</th>
                          <th>Nama jenis Pembayaran</th>
                          <th>Tarif</th>
                          <th>Tarif Aktual</th>
                          <th>Pembagian Keuntungan(%)</th>
                          <th>Pembagian Keuntungan(Rupiah)</th>
                          <th>Tanggal Angkut/Pickup Permintaan Pelanggan</th>
                          <th>Tanggal Angkut/Pickup</th>
                          <th>Catatan Angkut/Pickup</th>
                          <th>Nama Kurir</th>
                          <th>Diserahkan Oleh</th>
                          <th>Status Angkut/Pickup</th>
                          <th>Tanggal Batal Angkut/Pickup</th>
                          <th>Catatan Batal Angkut/Pickup</th>
                          <th>Tanggal Pengiriman/Delivery</th>
                          <th>Nama Kurir Pengiriman</th>
                          <th>Diterima Oleh</th>
                          <th>Status Pengiriman</th>
                          <th>Tanggal Pengiriman Tertunda</th>
                          <th>Catatan Pengiriman Tertunda</th>
                          <th>Tanggal Pengiriman Kembali Ke Pengirim</th>
                          <th>Catatan Pengiriman Kembali Ke Pengirim</th>
                          <th>Tanggal Pengiriman Selesai</th>
                          <th>Catatan Pengiriman Selesai</th>
                          <th>Status Terakhir</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>ID</th>
                          <th>Tanggal Dibuat</th>
                          <th>Nama Pengirim</th>
                          <th>Telepon Pengirim</th>
                          <th>Email Pengirim</th>
                          <th>Alamat Pengirim</th>
                          <th>Provinsi Pengirim</th>
                          <th>Kota Pengirim</th>
                          <th>Kecamatan Pengirim</th>
                          <th>Catatan Pengirim</th>
                          <th>Nama Penerima</th>
                          <th>Telepon Penerima</th>
                          <th>Alamat Penerima</th>
                          <th>Provinsi Penerima</th>
                          <th>Kota Penerima</th>
                          <th>Kecamatan Penerima</th>
                          <th>Tipe Pelanggan</th>
                          <th>Nomor Tracking</th>
                          <th>Nama Jenis Barang</th>
                          <th>Dimensi</th>
                          <th>Dimensi Aktual</th>
                          <th>Berat</th>
                          <th>Berat Aktual</th>
                          <th>Layanan</th>
                          <th>Nama jenis Pembayaran</th>
                          <th>Tarif</th>
                          <th>Tarif Aktual</th>
                          <th>Pembagian Keuntungan(%)</th>
                          <th>Pembagian Keuntungan(Rupiah)</th>
                          <th>Tanggal Angkut/Pickup Permintaan Pelanggan</th>
                          <th>Tanggal Angkut/Pickup</th>
                          <th>Catatan Angkut/Pickup</th>
                          <th>Nama Kurir</th>
                          <th>Diserahkan Oleh</th>
                          <th>Status Angkut/Pickup</th>
                          <th>Tanggal Batal Angkut/Pickup</th>
                          <th>Catatan Batal Angkut/Pickup</th>
                          <th>Tanggal Pengiriman/Delivery</th>
                          <th>Nama Kurir Pengiriman</th>
                          <th>Diterima Oleh</th>
                          <th>Status Pengiriman</th>
                          <th>Tanggal Pengiriman Tertunda</th>
                          <th>Catatan Pengiriman Tertunda</th>
                          <th>Tanggal Pengiriman Kembali Ke Pengirim</th>
                          <th>Catatan Pengiriman Kembali Ke Pengirim</th>
                          <th>Tanggal Pengiriman Selesai</th>
                          <th>Catatan Pengiriman Selesai</th>
                          <th>Status Terakhir</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>12-05-2020</td>
                          <td>Perbaikan</td>
                          <td>Image</td>
                          <td>
                            <a href="">
                                <i class="far fa-edit bg-light text-primary rounded-circle py-2 px-2"></i>
                            </a>
                            <a href="">
                                <i class="far fa-trash-alt bg-light text-danger rounded-circle py-2 px-2"></i>

                            </a>
                            <a href="">

                            </a>
                          </td>
                        
                      </tr>
                   
                  </tbody>
              </table>
          </div>
      </div>
  </div>

 
  
  {{-- Start Add Modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Catatan</h5>
          <button 
            type="button" 
            class="btn-close" 
            data-bs-dismiss="modal" 
            aria-label="Close">
          </button>
        </div>
        <form>
            <div class="modal-body">
                    <div class="mb-4">
                        <input 
                        type="email" 
                        class="form-control border-left-success shadow h-100" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        placeholder="Judul">
                    </div>
                    <div class="mb-4">
                        <textarea 
                            name="description" 
                            class="ckeditor w-100 shadow-lg" 
                            placeholder="description"
                            >
                        </textarea>
                    </div>
                    <div class="form-group mb-4">
                        <select 
                            class="form-control w-100 bg-white shadow" 
                            aria-label="Default select example" 
                            name="gender" 
                            value="{{ old('gender') }}">
                            <option value="Important">Important</option>
                            <option value="Unimportant">Unimportant</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
  {{-- End Add Modal --}}
  
@endsection


