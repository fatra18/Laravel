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
                    Tambah Cabang
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
                        <th>Nama Cabang</th>
                        <th>Kode Cabang</th>
                        <th>Telpon Cabang</th>
                        <th>Email Cabang</th>
                        <th>Alamat Cabang</th>
                        <th>Jenis_Kantor</th>
                        <th>Provinsi</th>
                        <th>Kota/Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nama Cabang</th>
                        <th>Kode Cabang</th>
                        <th>Telpon Cabang</th>
                        <th>Email Cabang</th>
                        <th>Alamat Cabang</th>
                        <th>Jenis_Kantor</th>
                        <th>Provinsi</th>
                        <th>Kota/Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>
                  <tbody>
                     @foreach ($branch as $data)
                     <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama_cabang }}</td>
                        <td>{{ $data->kode_cabang }}</td>
                        <td>{{ $data->telpon_cabang }}</td>
                        <td>{{ $data->email_cabang }}</td>
                        <td>{{ $data->alamat_cabang }}</td>
                        <td>{{ $data->provinces->name }}</td>
                        <td>{{ $data->regencies->name }}</td>
                        <td>{{ $data->districts->name }}</td>
                        <td>{{ $data->villages->name }}</td>
                        <td>{{ $data->jenis_kantor }}</td>
                        <td class="d-flex">
                          
                          <a 
                            href="#" 
                            class="d-flex align-items-center justify-content-center text-center mx-1"
                            data-bs-toggle="modal"
                            data-id="{{ $data->id }}" 
                            data-bs-target="#modal-edit{{ $data->id }}"
                            class="btn-edit">
                              <i 
                              class="far fa-edit bg-light text-primary rounded-circle py-2 px-2">
                              </i>
                          </a>

                          <a href="" class="d-flex align-items-center justify-content-center text-center mx-1">
                              <i class="fas fa-exclamation bg-light text-success rounded-circle py-2 px-3"></i>
                          </a>
                          {{-- <a href="">
                              <i class="far fa-trash-alt bg-light text-danger rounded-circle py-2 px-2 mx-1"></i>
                          </a>
                          <form action="{{ route('payment-delete',$data->id) }}" class="mr-1" method="POST">
                                @csrf
                                <button type="submit" class=""><i class="far fa-trash-alt bg-light text-danger rounded-circle py-2 px-2 mx-1"></i>
                                </button>
                                @method('DELETE')
                                
                            </form> --}}
                            <form method="POST" action="{{ route('payment-delete',$data->id) }}">

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
                                <form action="{{ route('payment-update',$data->id) }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <div class="modal-body">
                                        @include('payment.edit')
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
        <div class="modal-content " id="locations" style="width: 650px; transform:translate(-12%,0%);">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Cabang</h5>
                    <button 
                        type="button" 
                        class="btn-close" 
                        data-bs-dismiss="modal" 
                        aria-label="Close">
                    </button>
                </div>
                @method('POST')
                @csrf
                <div class="modal-body">
                  @include('branch.create')
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" form="jna" class="btn btn-primary ms-3">Submit</button>
                </div>   
        </div>
      
        </div>
    </div>
    {{-- End Add Modal --}}

@endsection

@push('after-script')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    var locations = new Vue({
        el: "#locations",
        mounted() {
            this.getProvincesData();
            this.getRegenciesData();
            this.getDistrictsData();
            this.getVillagesData();
        },
        data: {
            gom: 'dsfs',
        provinces: null,
        regencies: null,
        districts: null,
        villages: null,
        provinces_id: null,
        regencies_id: null,
        districts_id: null,
        villages_id: null,
        },
        methods: {
        getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
            .then(function (response) {
                self.provinces = response.data;
            })

        },
        getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
            .then(function (response) {
                self.regencies = response.data;
            })
        },
        getDistrictsData() {
            var self = this;
            axios.get('{{ url('api/districts') }}/' + self.regencies_id)
            .then(function (response) {
                self.districts = response.data;
            })
        },
        getVillagesData() {
            var self = this;
            axios.get('{{ url('api/villages') }}/' + self.districts_id)
            .then(function (response) {
                self.villages = response.data;
            })

        },
        },
        watch: {
        provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
        },
        regencies_id: function (val, oldVal) {
            this.districts_id = null;
            this.getDistrictsData();
        },
        districts_id: function (val, oldVal) {
            this.villages_id = null;
            this.getVillagesData();
        },
        }
    });
</script>
@endpush   



