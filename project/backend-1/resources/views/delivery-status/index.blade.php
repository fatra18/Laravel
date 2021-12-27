@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Status Delivery Page</h1>
  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div 
            class="card-header py-3 d-flex align-items-center">
          <h6 
            class="m-0 font-weight-bold text-primary w-100">
            DataTables Status Delivery
          </h6>
          <div 
            class="d-flex justify-content-end w-100">
            {{-- Tambah Status Pengiriman --}}
            <div 
                class="bg-primary px-5 py-1 rounded-pill mr-3">
                <a 
                    href="" 
                    class="text-white text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal">
                    <i 
                        class="fas fa-plus-circle">
                    </i>
                    Tambah Status Delivery
                </a>
            </div>
            
            {{-- Export & Import --}}
            <div 
                class="bg-success px-3 py-1 rounded dropdown d-flex align-items-center">
                <a  href="" 
                    class="text-white text-decoration-none"
                    id="dropdownMenuLink" 
                    data-bs-toggle="dropdown" 
                    aria-expanded="false">
                    <i class="fas fa-file "></i>
                    Export & Import
                </a>
                <ul 
                    class="dropdown-menu" 
                    aria-labelledby="dropdownMenuLink">
                    <li>
                        <a class="dropdown-item" 
                           href="#">
                        Export
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" 
                           href="#">
                           Import
                        </a>
                    </li>
                </ul>
            </div>
            {{-- End Export & Import --}}

          </div>  
      </div>

      {{-- Table --}}
      <div class="card-body row">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Nama Status Pengiriman</th>
                          <th>Kode Status Pengiriman</th>
                          <th>Informasi Status Pengiriman</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Nama Status Pengiriman</th>
                          <th>Kode Status Pengiriman</th>
                          <th>Informasi Status Pengiriman</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                     @foreach ($status_delivery as $data)
                        <tr>
                            <td>{{ $data->nama_status_pengiriman }}</td>
                            <td>{{ $data->kode_status_pengiriman }}</td>
                            <td>
                                <ul>
                                    <li> {{ $data->informasi_status_pengiriman }}</li>
                                    <li> Dibuat oleh : Administrator Doang Pada tanggal 30-06-2020 21:05:44</li>
                                </ul>

                            </td>
                            <td>{{ $data->status }}</td>
                            <td class="d-flex">
                              <a 
                                href="#" 
                                class="d-flex align-items-center justify-content-center text-center mx-1 btn-primary px-3 rounded text-decoration-none"
                                data-bs-toggle="modal"
                                data-id="{{ $data->id }}" 
                                data-bs-target="#modal-edit{{ $data->id }}">
                                Edit

                              </a>
                               <a href="" class="d-flex align-items-center justify-content-center text-center btn-warning px-3 rounded text-decoration-none">
                                Update
                               </a>
                               <form method="POST" action="{{ route('status_delivery-delete',$data->id) }}">
        
                                @csrf
        
                                <input name="_method" type="hidden" value="DELETE">
        
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm mx-1" data-toggle="tooltip" title='Delete'>Delete</button>
        
                                </form>
                            </td>
                        </tr>
                        {{-- Start Edit Modal --}}
                        
                        <div class="modal fade" id="modal-edit{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content " style="width: 650px; transform:translate(-12%,0%);">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Jenis Barang</h5>
                                <button 
                                    type="button" 
                                    class="btn-close" 
                                    data-bs-dismiss="modal" 
                                    aria-label="Close">
                                </button>
                                </div>
                                <form action="{{ route('status_delivery-update',$data->id) }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <div class="modal-body">
                                        @include('delivery-status.edit')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary ms-3">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        
                        {{-- End Edit Modal --}}
                        @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      {{-- End Table --}}

  </div>

 

   {{-- Start Add Modal --}}
<div class="modal fade" id="exampleModal"tabindex="-1" 
        aria-labelledby="exampleModalLabel"aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"style="width: 650px; transform:translate(-12%,0%);">
            <div class="modal-header">
                <h5 class="modal-title"id="exampleModalLabel">
                Tambah Jenis Ukuran
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
                    <form action="{{ route('status_delivery-store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="modal-body">
                            @include('delivery-status.create')
                        </div>
                        {{-- Modal Footer--}}
                        <div 
                                class="modal-footer">
                            <button 
                                type="button" 
                                class="btn btn-secondary" 
                                data-bs-dismiss="modal">
                                Close
                            </button>
                            <button 
                                type="submit" 
                                class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
        </div>
    </div>
</div>
{{-- End Add Modal --}}
  
@endsection


