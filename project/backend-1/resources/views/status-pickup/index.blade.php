@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Status Pickup Page</h1>
  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex align-items-center">
          <h6 class="m-0 font-weight-bold text-primary w-100">DataTables Status Pickup</h6>
          <div class="d-flex justify-content-end w-100">
            <div class="bg-primary px-5 py-1 rounded-pill mr-3">
                {{-- Tambah Status Pickup --}}
                <a 
                    href="" 
                    class="text-white text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal">
                    <i 
                        class="fas fa-plus-circle">
                    </i>
                    Tambah Status Pickup
                </a>
            </div>

            {{-- Import & Export --}}
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

          </div>  
      </div>

      {{-- Start Table --}}
      <div class="card-body row">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                        <th>Nama Status Angkut/Pickup</th>
                        <th>Kode Status Angkut/Pickup</th>
                        <th>Informasi Status Angkut/Pickup</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Nama Status Angkut/Pickup</th>
                          <th>Kode Status Angkut/Pickup</th>
                          <th>Informasi Status Angkut/Pickup</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($status_pickup as $data )
                    <tr>
                        <td>{{ $data->nama_status_pickup }}</td>
                        <td>{{ $data->kode_status_pickup }}</td>
                        <td>
                            <p>{{ $data->informasi_status_pickup }}</p>
                            <ul>
                                <li>Informasi Status Angkut/Pickup : baru</li>
                                <li>Dibuat oleh : Administrator Doang Pada tanggal 24-10-2021 08:41:01</li>
                            </ul>

                        </td>
                        <td>{{ $data->status }}</td>
                        <td class="d-flex">
                          {{-- Edit --}}
                          <a 
                              href="#" 
                              class="d-flex align-items-center justify-content-center text-center mx-1"
                              data-bs-toggle="modal"
                              data-id="{{ $data->id }}" 
                              data-bs-target="#modal-edit{{ $data->id }}">
                              <i 
                              class="far fa-edit bg-light text-primary rounded-circle py-2 px-2">
                              </i>
                          </a>
                          {{-- Delete --}}
                          <a href="">
                              <i class="far fa-trash-alt bg-light text-danger rounded-circle py-2 px-2"></i>
                          </a>
                          {{-- Status --}}
                          <form method="POST" action="{{ route('status_pickup-delete',$data->id) }}">
        
                            @csrf
    
                            <input name="_method" type="hidden" value="DELETE">
    
                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
    
                            </form>
                        </td>
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
                              <form action="{{ route('status_pickup-update',$data->id) }}" method="POST">
                                  @method('POST')
                                  @csrf
                                  <div class="modal-body">
                                      @include('status-pickup.edit')
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
                    </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
      {{-- End Table --}}
  </div>

 

   {{-- Start Add Modal --}}
    <div 
        class="modal fade" 
        id="exampleModal" 
        tabindex="-1" 
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div 
            class="modal-dialog">
            <div 
                class="modal-content" 
                style="width: 650px; transform:translate(-12%,0%);">
                <div 
                    class="modal-header">
                <h5 
                    class="modal-title" 
                    id="exampleModalLabel">
                    Tambah Status Angkut/Pickup
                </h5>
                <button 
                    type="button" 
                    class="btn-close" 
                    data-bs-dismiss="modal" 
                    aria-label="Close">
                </button>
                </div>
                <form action="{{ route('status_pickup-store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="modal-body">
                          @include('status-pickup.create')                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{-- End Add Modal --}}
  
@endsection


