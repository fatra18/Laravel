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
    value="{{ $data->nama_jenis_pembayaran }}" 
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
    value="{{ $data->kode_jenis_pembayaran }}" 
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
    value="{{ $data->informasi_jenis_pembayaran }}" 
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
            value="Tunai" {{ old('tipe_status',$data->tipe_status) == 'Tunai' ? 'checked' : '' }} 
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
            value="Transfer" {{ old('tipe_status',$data->tipe_status) == 'Transfer' ? 'checked' : '' }} 
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
            value="Kredit" {{ old('tipe_status',$data->tipe_status) == 'Kredit' ? 'checked' : '' }} 
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
            value="Vocer" {{ old('tipe_status',$data->tipe_status) == 'Vocer' ? 'checked' : '' }} 

            {{-- value="{{ old('tipe_status',$payment->tipe_status) == '1' ? 'checked' : '' }}"             --}}
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
            Vocer
        </label>
    </div>
</div>
<input type="hidden"value="{{$data->status}}" name="status">

  
