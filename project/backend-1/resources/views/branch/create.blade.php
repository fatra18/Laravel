<form id="jna" action="{{ route('branch-store') }} " method="POST" enctype="multipart/form-data" >
    @csrf
    <div>
            {{-- Start Nama Cabang --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('nama_cabang')
                        
                    @enderror>
                    Nama Cabang @error('nama_cabang')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                name="nama_cabang"
                id="nama_cabang"
                value="{{ old('nama_cabang') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp"
                placeholder="Nama Cabang">
            </div>
            {{-- End Nama Cabang --}}

            {{-- Start Kode Cabang  --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('kode_cabang')
                        
                    @enderror>
                    Kode Cabang @error('kode_cabang')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                name="kode_cabang"
                id="kode_cabang"
                value="{{ old('kode_cabang') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp"
                placeholder="Kode Cabang">
            </div>
            {{-- End Kode Cabang --}}
            
            {{-- Start Telpon Cabang --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('telpon_cabang')
                        
                    @enderror>
                    Telpon Cabang @error('telpon_cabang')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                name="telpon_cabang"
                id="telpon_cabang"
                value="{{ old('telpon_cabang') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp"
                placeholder="Telpon Cabang">
            </div>
            {{-- End Telpon Cabang --}}
            
            {{-- Start Email Cabang --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('email_cabang')
                        
                    @enderror>
                    Email Cabang @error('email_cabang')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                name="email_cabang"
                id="email_cabang"
                value="{{ old('email_cabang') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp"
                placeholder="Email Cabang">
            </div>
            {{-- End Email Cabang --}}

            {{-- Start Alamat Cabang --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                class="ms-3" 
                style="width: 100px;">
                Alamat Cabang
                </label>
                <textarea 
                type="text"
                name="alamat_cabang" 
                class="form-control border-left-dark shadow h-100 w-75 ms-4 mb-3" 
                id="exampleInputEmail1" 
                aria-describedby="emailHelp"
                placeholder="Alamat Cabang">
                </textarea>
            </div>
            {{-- End Alamat Cabang --}}

            {{-- Start Cangkupan Provinsi --}}
            <div 
                class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 100px;">
                Cangkupan Provinsi
                </label>
                <select 
                    name="provinces_id" 
                    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                    id="provinces_id" 
                    v-if="provinces" 
                    v-model="provinces_id">
                    <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                </select>
            </div>
            {{-- End Cangkupan Provinsi --}}

            {{-- Start ID Provinsi --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('id_provinsi')
                        
                    @enderror>
                    ID Provinsi @error('id_provinsi')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                v-model="provinces_id"
                id="id_provinsi"
                value="{{ old('id_provinsi') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp">
            </div>
            {{-- End ID Provinsi --}}
            
            {{--  Start Cangkupan Kota/Kabupaten --}}
            <div 
                class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 100px;">
                Cangkupan Kota/Kabupaten
                </label>
                <select 
                    name="regencies_id" 
                    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                    id="regencies_id" 
                    v-if="regencies" 
                    v-model="regencies_id">
                    <option v-for="regencie in regencies" :value="regencie.id">@{{ regencie.name }}</option>
                </select>
            </div>
            {{-- End Cangkupan Kota/Kabupaten --}}

            {{-- Start ID Kota/Kabupaten --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('id_kecamatan')
                        
                    @enderror>
                    ID Kota/Kabupaten @error('id_kecamatan')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                v-model="regencies_id"
                id="id_kecamatan"
                value="{{ old('id_kecamatan') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp">
            </div>
            {{-- End Kota/Kabupaten--}}
            
            {{-- Start Cangkupan Kecamatan --}}
            <div 
                class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 100px;">
                Cangkupan Kecamatan
                </label>
                <select 
                    name="districts_id" 
                    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                    id="districts_id" 
                    v-if="districts" 
                    v-model="districts_id">
                    <option v-for="district in districts" :value="district.id">@{{ district.name }}</option>
                </select>
            </div>
            {{-- End Cangkupan Kecamatan --}}

            {{-- ID Kecamatan --}}
            <div class="mb-3 d-flex align-items-center" >
                <label 
                    class="ms-3" 
                    style="width: 120px;"
                    @error('id_kecamatan')
                        
                    @enderror>
                    ID Kecamatan @error('id_kecamatan')
                        !{{ $message }}
                    @enderror
                </label>
                <input 
                type="text"
                v-model="districts_id"
                id="id_kecamatan"
                value="{{ old('id_kecamatan') }}" 
                class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
                aria-describedby="emailHelp">
            </div>
            {{-- End Kecamatan --}}

            {{-- Start Cangkupan Desa --}}
              <div 
              class="mb-3 d-flex align-items-center" >
              <label 
                  class="ms-3" 
                  style="width: 100px;">
              Cangkupan Desa
              </label>
              <select 
                  name="villages_id" 
                  class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                  id="villages_id" 
                  v-if="villages" 
                  v-model="villages_id">
                  <option v-for="village in villages" :value="village.id">@{{ village.name }}</option>
              </select>
          </div>
          {{-- End Cangkupan Desa --}}

          {{-- Start ID Desa --}}
          <div class="mb-3 d-flex align-items-center" >
              <label 
                  class="ms-3" 
                  style="width: 120px;"
                  @error('id_kecamatan')
                      
                  @enderror>
                  ID Desa @error('id_kecamatan')
                      !{{ $message }}
                  @enderror
              </label>
              <input 
              type="text"
              v-model="villages_id"
              id="id_kecamatan"
              value="{{ old('id_kecamatan') }}" 
              class="form-control border-left-dark shadow h-100 w-75 ms-1 mb-2" 
              aria-describedby="emailHelp">
          </div>
          {{-- End ID Desa --}}

        <div 
                class="mb-1 d-flex align-items-center flex-wrap col">
                <label 
                    class="ms-1" 
                    style="width: 100px;">
                    Jenis Kantor
                </label>
                <div class="form-check col-2">
                    <input 
                        class="form-check-input"
                        style="margin-left:0px;" 
                        type="radio" 
                        name="jenis_kantor"
                        value="Pusat" 
                        id="flexRadioDefault2" checked>
                    <label 
                        class="form-check-label"
                        style="margin-left:20px;" 
                        for="flexRadioDefault2">
                    Pusat
                    </label>
                </div>
                <div class="form-check col-2">
                    <input 
                        class="form-check-input"
                        style="margin-left:0px;" 
                        type="radio" 
                        name="jenis_kantor"
                        value="Cabang" 
                        id="flexRadioDefault1">
                    <label 
                        class="form-check-label"
                        style="margin-left:20px;" 
                        for="flexRadioDefault1">
                    Cabang
                    </label>
                </div>
        </div>

          
    </div>
</form>

