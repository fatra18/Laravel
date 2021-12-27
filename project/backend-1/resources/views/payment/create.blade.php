<div class="mb-2 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width: 100px;"
        @error('nama_jenis_pembayaran')
            
        @enderror>
        Nama Jenis Pembayaran @error('nama_jenis_pembayaran')
            !{{ $message }}
        @enderror
    </label>
    <input 
    type="text"
    name="nama_jenis_pembayaran"
    id="nama_jenis_pembayaran"
    value="{{ old('nama_jenis_pembayaran') }}" 
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    aria-describedby="emailHelp"
    placeholder="Nama Jenis Pembayaran">
</div>
<div class="mb-2 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width: 100px;"
        @error('kode_jenis_pembayaran')
            
        @enderror>
        Kode Jenis Pembayaran @error('kode_jenis_pembayaran')
            !{{ $message }}
        @enderror
    </label>
    <input 
    type="text"
    name="kode_jenis_pembayaran"
    value="{{ old('kode_jenis_pembayaran') }}" 
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    aria-describedby="emailHelp"
    placeholder="Kode Jenis Pembayaran">
</div>
<div class="mb-2 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width: 100px;"
        @error('informasi_jenis_pembayaran')
            
        @enderror>
        Informasi Jenis Pembayaran @error('informasi_jenis_pembayaran')
            !{{ $message }}
        @enderror
    </label>
    <input 
    type="text"
    name="informasi_jenis_pembayaran"
    value="{{ old('informasi_jenis_pembayaran') }}" 
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    aria-describedby="emailHelp"
    placeholder="Informasi Jenis Pembayaran">
</div>
<div class="mb-3 d-flex align-items-center">
    <label for="" class="ms-3" style="width: 100px;">Tipe Status</label>
    <div class="form-check">
        <input 
            class="form-check-input ms-1" 
            type="radio" 
            name="tipe_status"
            value="Tunai" 
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
        Tunai
        </label>
    </div>
    
    <div class="form-check">
        <input 
            class="form-check-input ms-1" 
            type="radio" 
            name="tipe_status"
            value="Transfer" 
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
            Transfer
        </label>
    </div>
    
    <div class="form-check">
        <input 
            class="form-check-input ms-1" 
            type="radio" 
            name="tipe_status"
            value="Kredit" 
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
            Kredit
        </label>
    </div>
    
    <div class="form-check">
        <input 
            class="form-check-input ms-1" 
            type="radio" 
            name="tipe_status"
            value="Vocer" 
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
            Vocer
        </label>
    </div>
</div>
<div class="mb-1 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width: 100px;"
        @error('status')
            
        @enderror>
        Status @error('status')
            !{{ $message }}
        @enderror
    </label>
        <input type="hidden" value="Active" name="status">
        {{-- <input type="hidden" value="Active" name="chapters_id"> --}}
    {{-- <select class="form-select form-select-md mb-3 w-75 ms-4" aria-label=".form-select-lg example" name="status" value="{{ old('status') }}">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select> --}}
</div>