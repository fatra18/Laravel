@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Size Page</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex align-items-center">
          <h6 class="m-0 font-weight-bold text-primary w-100">DataTables Size</h6>
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
                    Tambah Jenis Ukuran
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
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Nama Jenis Ukuran</th>
                          <th>Dimensi Minimal</th>
                          <th>Dimensi Maksimal</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama Jenis Ukuran</th>
                        <th>Dimensi Minimal</th>
                        <th>Dimensi Maksimal</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($size as $data )
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td >
                           <p class="ms-3" style="width:400px;">{{ $data->nama_jenis_ukuran }}</p>
                           <ul>
                              <li>Dibuat oleh : Administrator Doang Pada tanggal 08-07-2020 10:50:50</li>
                              <li>Keterangan : Administrator Doang Pada tanggal 04-10-2021 20:20:42 melakukan update status jenis barang menjadi active yang sebelumnya inactive</li>
                           </ul>
                        </td>
                        <td>
                          <ul class="mt-4">
                              <li class="" style="width:200px; font-size:14px;">
                                Minimal Panjang/Diameter :  {{ $data->minimal_panjang_diameter }}
                              </li>
                              <li class="" style="width:200px; font-size:14px;">
                                Minimal Lebar : {{ $data->minimal_lebar }}
                              </li>
                              <li class="" style="width:200px; font-size:14px;">
                                Minimal Tinggi : {{ $data->minimal_tinggi }}
                              </li>
                          </ul>
                        </td>
                        <td>
                            <ul class="mt-4">
                                <li class="" style="width:200px; font-size:14px;">
                                    Maksimal Panjang/Diameter : {{ $data->maksimal_panjang_diameter }}
                                </li>
                                <li class="" style="width:200px; font-size:14px;">
                                    Maksimal Lebar : {{ $data->maksimal_lebar }}
                                </li>
                                <li class="" style="width:200px; font-size:14px;">
                                    Maksimal Tinggi : {{ $data->minimal_tinggi }}
                                </li>
                            </ul>
                        </td>
                        <td>Active</td>
                        <td class="d-flex">
                            <a 
                                href="#" 
                                class="d-flex align-items-center justify-content-center text-center mx-1 btn-primary px-3 rounded text-decoration-none"
                                data-bs-toggle="modal"
                                data-id="{{ $data->id }}" 
                                data-bs-target="#modal-edit{{ $data->id }}"
                                class="">
                                Edit
                            </a>

                          <a href=""class="d-flex align-items-center justify-content-center text-center  btn-warning px-3 rounded text-decoration-none"                          >
                            Update
                          </a>
                          <form method="POST" action="{{ route('size-delete',$data->id) }}">

                            @csrf

                            <input name="_method" type="hidden" value="DELETE">

                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm mx-1" data-toggle="tooltip" title='Delete'>Delete</button>

                        </form>
                        </td>
                      
                      
                    </tr>
                     {{-- Start Add Modal --}}
                     <div class="modal fade" id="modal-edit{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content " style="width: 650px; transform:translate(-12%,0%);">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Pembayaran</h5>
                            <button 
                                type="button" 
                                class="btn-close" 
                                data-bs-dismiss="modal" 
                                aria-label="Close">
                            </button>
                            </div>
                            <form action="{{ route('size-update',$data->id) }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="modal-body">
                                    @include('size.edit')
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary ms-3">Save Changes</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    {{-- End Add Modal --}}
                    @endforeach
                   
                  </tbody>
              </table>
          </div>
      </div>
  </div>

   {{-- Start Add Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content " style="width: 650px; transform:translate(-12%,0%);">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Ukuran</h5>
            <button 
                type="button" 
                class="btn-close" 
                data-bs-dismiss="modal" 
                aria-label="Close">
            </button>
            </div>
            <form action="{{ route('size-store') }}" method="POST">
                @method('POST')
                @csrf
               @include('size.create')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ms-3">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
  {{-- End Add Modal --}}
  
 
  
  
  
@endsection


