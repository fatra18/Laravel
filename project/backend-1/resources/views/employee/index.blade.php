@extends('layouts.app')
@section('content')
  <!-- Page Heading -->
  <h1 class="h3 mb-3 text-gray-800">Pegawai Page</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header py-3 d-flex align-items-center">
          <h6 class="m-0 font-weight-bold text-primary w-100">DataTables Employee</h6>
          <div class="d-flex justify-content-end w-100">
            <div class="bg-primary px-5 py-1 rounded-pill mr-3">
                {{-- Create Pegawai --}}
                <a 
                    href="" 
                    class="text-white text-decoration-none"
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal">
                    <i 
                        class="fas fa-plus-circle">
                    </i>
                    Tambah Anggota Tim
                </a>
            </div>

            {{-- Start Import Export --}}
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
                    <li>
                        <a 
                            class="dropdown-item" 
                            href="#">
                            Export
                        </a>
                    </li>
                    <li>
                        <a 
                            class="dropdown-item" 
                            href="#">
                            Import
                        </a>
                    </li>
                </ul>
            </div>
            {{-- End Import Export --}}
          </div> 

      </div>
      
      {{-- Start Table --}}
      <div class="card-body row">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Image</th>
                          <th>Nama Pekerjaan</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Nama Jabatan</th>
                          <th>Nama Cabang</th>
                          <th>Imei</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Image</th>
                          <th>Nama Pekerjaan</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Nama Jabatan</th>
                          <th>Nama Cabang</th>
                          <th>Imei</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      <tr>
                          <td>
                              <img src="" alt="">
                          </td>
                          <td>CT</td>
                          <td>
                            ctjabo@demo.com
                          </td>
                          <td>123123123123</td>
                          <td>
                            Control Tower
                          </td>
                          <th>Jabodetabek (Kantor Cabang)</th>
                          <td>
                            c61b4ebf-d655-4ee5-a30f-57edd4c2aa5f
                          </td>
                          <td>active</td>
                          <td>
                            <a href="">
                                {{-- Edit --}}
                                <i class="far fa-edit bg-light text-primary rounded-circle py-2 px-2"></i>
                            </a>
                            <a href="">
                                {{-- Hapus --}}
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
                    style="width: 650px;transform:translate(-12%,0%);">
                    <div 
                        class="modal-header">
                    <h5 
                        class="modal-title" 
                        id="exampleModalLabel">
                        Tambah Anggota Tim
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
                            {{-- Nama Depan  --}}
                            <div 
                                class="mb-3 d-flex align-items-center" >
                                    <label 
                                        class="ms-3" 
                                        style="width: 100px;">
                                        Nama Depan
                                    </label>
                                    <input 
                                    type="email" 
                                    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                    id="exampleInputEmail1"
                                    name="nama_depan" 
                                    aria-describedby="emailHelp"
                                    placeholder="Nama Depan">
                            </div>
                            {{-- End Nama Depan --}}

                            {{-- Nama Akhir --}}
                            <div class="mb-3 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Nama Akhir
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1"
                                name="nama_akhir" 
                                aria-describedby="emailHelp"
                                placeholder="Nama Akhir">
                            </div>
                            {{-- End Nama Akhir --}}

                            {{-- Alamat --}}
                            <div class="mb-3 d-flex align-items-center" >
                                <label class="ms-3" style="width: 100px;">Alamat</label>
                                <textarea 
                                type="number"
                                name="alamat" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1" 
                                aria-describedby="emailHelp"
                                placeholder="Informasi Status Pengiriman">
                                </textarea>
                            </div>
                            {{-- End Alamat --}}

                            {{-- Phone --}}
                            <div class="mb-3 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Phone
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1"
                                name="phone" 
                                aria-describedby="emailHelp"
                                placeholder="Phone">
                            </div>
                            {{-- End Phone --}}

                            {{-- Gender --}}
                            <div class="mb-1 d-flex align-items-center flex-wrap col">
                                
                                <label 
                                    class="ms-1" 
                                    style="width: 100px;">
                                    Gender
                                </label>
                                
                                {{-- Pria --}}
                                <div class="form-check col-2">
                                    <input 
                                        class="form-check-input"
                                        style="margin-left: 5px;" 
                                        type="radio" 
                                        name="flexRadioDefault" 
                                        id="flexRadioDefault1">
                                    <label 
                                        class="form-check-label" 
                                        for="flexRadioDefault1"
                                        style="margin-left:30px;">
                                    Pria
                                    </label>
                                </div>
                                {{-- End Pria --}}
                                
                                {{-- Perempuan --}}
                                <div class="form-check col-2">
                                    <input 
                                        class="form-check-input"
                                        style="margin-left:0px;" 
                                        type="radio" 
                                        name="flexRadioDefault" 
                                        id="flexRadioDefault2" checked>
                                    <label 
                                        class="form-check-label"
                                        style="margin-left:20px;" 
                                        for="flexRadioDefault2">
                                    Perempuan
                                    </label>
                                </div>
                                {{-- End Perempuan --}}
                            </div>
                                
                            {{-- Nama Pekejaan --}}
                            <div class="mb-3 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Nama Pekerjaan
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1"
                                name="nama_pekerjaan" 
                                aria-describedby="emailHelp"
                                placeholder="Nama Pekerjaan">
                            </div>
                            {{-- End Nama Pekerjaan --}}
                            
                            {{-- Tanggal Bergabung --}}
                            <div class="mb-3 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Tanggal bergabung
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1"
                                name="tanggal_bergabung" 
                                aria-describedby="emailHelp"
                                placeholder="Tanggal bergabung">
                            </div>
                            {{-- End Tanggal Bergabung --}}
                            
                            {{-- Email --}}
                            <div class="mb-3 d-flex align-items-center" >
                                <label 
                                    class="ms-3" 
                                    style="width: 100px;">
                                    Email
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1"
                                name="email" 
                                aria-describedby="emailHelp"
                                placeholder="Email">
                            </div>
                            {{-- End Email --}}
                                
                            {{-- Password --}}
                            <div 
                                class="mb-3 d-flex align-items-center" >
                                <label 
                                class="ms-3" 
                                style="width: 100px;">
                                Password
                                </label>
                                <input 
                                type="email" 
                                class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                                id="exampleInputEmail1"
                                name="password" 
                                aria-describedby="emailHelp"
                                placeholder="Password">
                            </div>
                            {{-- End Password --}}

                            {{-- Cabang --}}
                            <div 
                                class="mb-3 d-flex align-items-center" >
                                <label 
                                class="ms-3" 
                                style="width: 100px;">
                                Cabang
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Pilih Cabang
                                    </option>
                                </select>
                            </div>
                            {{-- End Cabang --}}
                                
                            {{-- Jabatan --}}
                            <div 
                                class="mb-3 d-flex align-items-center" >
                                <label 
                                class="ms-3" 
                                style="width: 100px;">
                                Jabatan
                                </label>
                                <select 
                                    class="form-select h-100 w-75 ms-4" 
                                    aria-label="Default select example">
                                    <option selected>
                                        Pilih Jabatan
                                    </option>
                                </select>
                            </div>
                            {{-- End Jabatan --}}
                        </div>

                        {{-- Footer --}}
                        <div class="modal-footer">
                            <button 
                                type="button" 
                                class="btn btn-secondary" 
                                data-bs-dismiss="modal">
                                Close
                            </button>
                            <button 
                                type="submit" 
                                class="btn btn-primary mt-4 ms-3">
                                Submit
                            </button>
                        </div>
                        {{-- Footer --}}
                        
                    </form>
                </div>
        </div>
    </div>
{{-- End Add Modal --}}
  
@endsection


