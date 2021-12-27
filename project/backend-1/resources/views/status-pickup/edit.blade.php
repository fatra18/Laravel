{{-- Nama Status Angkut/Pickup --}}
<div class="mb-1 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width: 100px;">
        Nama Status Angkut/Pickup
    </label>
    <input 
    type="text"
    name="nama_status_pickup"
    value="{{ $data->nama_status_pickup }}" 
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Nama Status Angkut/Pickup">
</div>
{{-- End Status Pickup --}}
{{-- Kode Status Angkut/Pickup --}}
<div class="mb-1 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width:100px;">
        Kode Status Angkut/Pickup
    </label>
    <input 
    type="text"
    name="kode_status_pickup"
    value="{{ $data->kode_status_pickup }}"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Kode Status Angkut/Pickup">
</div>
{{-- End Kode Status Angkut Pickup --}}
<div class="mb-1 d-flex align-items-center" >
    <label 
        class="ms-3" 
        style="width: 100px;">
        Informasi Status Angkut/Pickup
    </label>
    <textarea 
    type="text"
    name="informasi_status_pickup" 
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Informasi Status Angkut/Pickup">
    {{ $data->informasi_status_pickup }} 
    </textarea>
</div>
{{-- Tipe Status --}}
<div 
    class="mb-1 d-flex align-items-center flex-wrap col">
    <label 
        class="ms-1" 
        style="width: 100px;">
        Tipe Status
    </label>
    <div class="form-check col-2">
        <input 
            class="form-check-input"
            style="margin-left: 5px;" 
            type="radio" 
            name="tipe_status"
            value="Bersiap" {{ old('tipe_status',$data->tipe_status) == 'Bersiap' ? 'checked' : '' }} 
            id="flexRadioDefault1">
        <label 
            class="form-check-label" 
            for="flexRadioDefault1"
            style="margin-left:30px;">
        Bersiap
        </label>
    </div>
    <div class="form-check col-2">
        <input 
            class="form-check-input"
            style="margin-left:0px;" 
            type="radio" 
            name="tipe_status"
            value="Menunggu" {{ old('tipe_status',$data->tipe_status) == 'Menunggu' ? 'checked' : '' }} 
            id="flexRadioDefault2">
        <label 
            class="form-check-label"
            style="margin-left:20px;" 
            for="flexRadioDefault2">
        Menunggu
        </label>
    </div>
    <div class="form-check col-2">
        <input 
            class="form-check-input"
            style="margin-left:0px;" 
            type="radio" 
            name="tipe_status"
            value="Batal" {{ old('tipe_status',$data->tipe_status) == 'Batal' ? 'checked' : '' }}  
            id="flexRadioDefault1">
        <label 
            class="form-check-label"
            style="margin-left:20px;" 
            for="flexRadioDefault1">
        Batal
        </label>
    </div>
</div>
<input type="hidden" value="Active" name="status">

{{-- End Tipe Status --}}    