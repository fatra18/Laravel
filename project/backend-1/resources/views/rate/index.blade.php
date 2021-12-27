@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Tarif Page</h1>
  

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex align-items-center">
          <h6 class="m-0 font-weight-bold text-primary w-100">DataTables Tarif</h6>
          <div class="d-flex justify-content-end w-100">
            <div class="bg-primary px-5 py-1 rounded-pill mr-3">
                
                {{-- Tambah Jenis Tarif --}}
                <a 
                    href="" 
                    class="text-white text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal">
                    <i 
                        class="fas fa-plus-circle">
                    </i>
                    Tambah Jenis Tarif
                </a>
            </div>
            
            {{-- Export & Import --}}
            <div class="bg-success px-3 py-1 rounded dropdown d-flex align-items-center">
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
                          <th>ID</th>
                          <th>Layanan</th>
                          <th>Detail Asal</th>
                          <th>Detail Tujuan</th>
                          <th>Tarif</th>
                          <th>Informasi Tarif</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>Layanan</th>
                        <th>Detail Asal</th>
                        <th>Detail Tujuan</th>
                        <th>Tarif</th>
                        <th>Informasi Tarif</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>9927 </td>
                          <td>Nextday (1-2 Hari</td>
                          <td>
                              <ul>
                                  <li>Provinsi Asal : BANTEN</li>
                                  <li>Kabupaten/Kota Asal : KOTA TANGERANG SELATAN</li>
                                  <li>Kecamatan Asal : SERPONG UTARA</li>
                              </ul>
                          </td>
                          <td>
                              <ul>
                                  <li>Provinsi Tujuan : JAWA BARAT</li>
                                  <li>Kabupaten/Kota Tujuan : KABUPATEN BEKASI</li>
                                  <li>Kecamatan Tujuan : SETU</li>
                              </ul>
                          </td>
                          <th>12,000</th>
                          <td>
                            <ul>
                                <li>Dibuat oleh : Administrator Doang Pada tanggal 02-02-2021 16:53:58</li>
                                <li>Keterangan : Pada tanggal 02-02-2021 16:53:58 upload data excel</li>
                            </ul>
                        </td>
                          <td>active</td>
                          <td>
                            
                            {{-- Edit --}}
                            <a href="">
                                <i class="far fa-edit bg-light text-primary rounded-circle py-2 px-2"></i>
                            </a>
                            {{-- Delete --}}
                            <a href="">
                                <i class="far fa-trash-alt bg-light text-danger rounded-circle py-2 px-2"></i>
                            </a>
                            {{-- Status --}}
                            <a href="">

                            </a>
                          </td>
                        
                      </tr>
                   
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
                    Tambah Jenis Tarif
                </h5>
                <button 
                    type="button" 
                    class="btn-close" 
                    data-bs-dismiss="modal" 
                    aria-label="Close">
                </button>
                </div>
                <form>
                    <div class="modal-body">
                            {{-- Provinsi Asal --}}
                            <div 
                                class="mb-2 d-flex align-items-center">
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Provinsi Asal
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Open this select menu
                                    </option>
                                </select>
                            </div>
                            {{-- End Provinsi Asal --}}
                            
                            {{-- Kabupaten Kota --}}
                            <div 
                                class="mb-2 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Kabupaten/Kota Asal
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Open this select menu
                                    </option>
                                </select>
                            </div>
                            {{-- End Kabupaten Kota --}}
                            
                            {{-- Kecamatan Asal  --}}
                            <div 
                                    class="mb-2 d-flex align-items-center">
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Kecamatan Asal
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Open this select menu
                                    </option>
                                </select>
                            </div>
                            {{-- End Kecamatan Asal --}}
                            
                            {{-- Provinsi Tujuan --}}
                            <div 
                                    class="mb-2 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Provinsi Tujuan
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Open this select menu
                                    </option>
                                </select>
                            </div>
                            {{-- End Provinsi Tujuan --}}
                            
                            {{-- Kabupaten Kota Tujuan --}}
                            <div class="mb-2 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Kabupaten/Kota Tujuan
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Open this select menu
                                    </option>
                                </select>
                            </div>
                            {{-- End Kabupaten Kota Tujuan --}}
                            
                            {{-- Kecamatan Tujuan  --}}
                            <div 
                                class="mb-2 d-flex align-items-center">
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Kecamatan Tujuan
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Open this select menu
                                    </option>
                                </select>
                            </div>
                            {{-- End Kecamatan Tujuan --}}

                            {{-- Tarif --}}
                            <div 
                                class="mb-3 d-flex align-items-center">
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Tarif
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1" 
                                aria-describedby="emailHelp"
                                placeholder="Nama Status Angkut/Pickup">
                            </div>
                            {{-- Tarif --}}                
                    </div>
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


