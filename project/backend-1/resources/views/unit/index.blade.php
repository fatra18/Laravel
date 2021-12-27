@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Unit Page</h1>
  
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex align-items-center">
          <h6 class="m-0 font-weight-bold text-primary w-100">DataTables Unit</h6>
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
                    Tambah Jenis Satuan
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
                          <th>Nama Satuan</th>
                          <th>Kode Satuan</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>#</th>
                          <th>Nama Satuan</th>
                          <th>Kode Satuan</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($unit as $data )
                      <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama_satuan }}</td>
                        <td>{{ $data->kode_satuan }}</td>
                        <td>Active</td>
                        <td class="d-flex">
                            <a 
                            href="#" 
                            class="d-flex align-items-center justify-content-center text-center btn-primary rounded px-3 text-decoration-none"
                            data-bs-toggle="modal"
                            data-id="{{ $data->id }}" 
                            data-bs-target="#modal-edit{{ $data->id }}"
                            class="btn-edit">
                            Edit
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-center text-center mx-1 btn-warning px-4 rounded text-decoration-none">
                            Update
                        </a>
                        <form method="POST" action="{{ route('unit-delete',$data->id) }}">

                            @csrf

                            <input name="_method" type="hidden" value="DELETE">

                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>

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
                            <form action="{{ route('unit-update',$data->id) }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="modal-body">
                                    @include('unit.edit')
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
          <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Satuan</h5>
          <button 
            type="button" 
            class="btn-close" 
            data-bs-dismiss="modal" 
            aria-label="Close">
          </button>
        </div>
        <form action="{{ route('unit-store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="modal-body">
                @include('unit.create')
            </div>
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


