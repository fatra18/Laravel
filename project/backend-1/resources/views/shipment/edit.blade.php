<div class="modal-body">
                
    <div class="mb-1 d-flex align-items-center" >
        <label for="" class="ms-3" style="width: 100px;">Layanan</label>
        <input 
        type="text"
        name="layanan"     
        value="{{ $data->layanan }}" 
        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
        placeholder="Layanan">
    </div>
    
    <div class="mb-1 d-flex align-items-center" >
        <label for="" class="ms-3" style="width:100px;">Kode Layanan</label>
        <input 
        type="text"
        name="kode_layanan"
        value="{{ $data->kode_layanan }}"  
        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
        placeholder="Kode Layanan">
    </div>
    
    <div class="mb-1 d-flex align-items-center" >
        <label for="" class="ms-3" style="width: 100px;">
           Waktu Pengiriman
        </label>
        <input 
        type="number"
        name="waktu_pengiriman"
        value="{{ $data->waktu_pengiriman }}"  
        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
        placeholder="Informasi Jenis Pembayaran">
    </div>
    
    <div class="mb-1 d-flex align-items-center" >
        <label for="" class="ms-3" style="width: 100px;">
           Minimal
        </label>
        <input 
        type="number"
        name="minimal"
        value="{{ $data->minimal }}"  
        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
        placeholder="Minimal">
    </div>
    
    <div class="mb-1 d-flex align-items-center" >
        <label for="" class="ms-3" style="width: 100px;">
           Maksimal
        </label>
        <input 
        type="number"
        name="maksimal"
        value="{{ $data->maksimal }}"  
        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
        placeholder="Maksimal">
    </div>
    
    <div 
            class="mb-2 d-flex align-items-center" >
            <label 
                class="ms-3" 
                style="width: 100px;">
            Satuan
            </label>
            <select
                name="units_id"
                value="{{ old('units_id') }}" 
                class="form-select h-100 w-75 ms-4" 
                aria-label="Default select example">
                @foreach ($units as $unit )
                <option value="{{ $unit->id }}"{{ $unit->id === $data->units_id ? 'selected' : '' }}>{{ $unit->nama_satuan }}</option>
                @endforeach
            </select>
    </div>

    <div class="mb-1 d-flex align-items-center" >
        <label for="" class="ms-3" style="width: 100px;">
           Informasi Pengiriman
        </label>
        <textarea
        type="number"        
        name="informasi_pengiriman" 
        value=""  
        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
        id="exampleInputEmail1" 
        aria-describedby="emailHelp"
        placeholder="Informasi Pengiriman">
        {{ $data->informasi_pengiriman }}
        </textarea>
    </div>
    <input type="hidden" value="Active" name="status">

</div>