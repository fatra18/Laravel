<div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Nama Jenis Barang </label>
    <input 
    type="text"
    name="nama_jenis_barang" 
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Nama Jenis Barang">
</div>

<div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Jenis Kemasan</label>
    <input 
    type="text"
    name="jenis_kemasan"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Jenis Kemasan">
</div>

<div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Panjang Maksimal</label>
    <input 
    type="number"
    name="panjang_maksimal"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Panjang Maksimal">
</div>

<div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Lebar Maksimal</label>
    <input 
    type="number"
    name="lebar_maksimal"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Lebar Maksimal">
</div>

<div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Tinggi Maksimal</label>
    <input 
    type="number"
    name="tinggi_maksimal"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Tinggi Maksimal">
</div>

{{-- <div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Satuan Panjang</label>
    <input 
    type="number"
    name="satuan_panjang"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Satuan Panjang">
</div> --}}

<div class="mb-3 d-flex align-items-center">
    <label for="" class="ms-3" style="width: 100px;">Satuan Panjang</label>
    <div class="form-check">
        <input 
            class="form-check-input ms-1" 
            type="radio" 
            name="satuan_panjang"
            value="Centimeter" 
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
        Centimeter
        </label>
    </div>
    
    <div class="form-check">
        <input 
            class="form-check-input ms-1" 
            type="radio" 
            name="satuan_panjang"
            value="Meter" 
            id="flexRadioDefault1">
        <label 
            class="form-check-label ms-4" 
            for="flexRadioDefault1">
            Meter
        </label>
    </div>
</div>
<div class="mb-1 d-flex align-items-center" >
    <label for="" class="ms-3" style="width: 100px;">Berat Maksimal</label>
    <input 
    type="number"
    name="berat_maksimal"  
    class="form-control border-left-dark shadow h-100 w-75 ms-4" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp"
    placeholder="Berat Maksimal">
</div>

<div 
        class="mb-2 d-flex align-items-center" >
        <label 
            class="ms-3" 
            style="width: 100px;">
           Satuan Berat
        </label>
        <select
            name="units_id"
            value="{{ old('units_id') }}" 
            class="form-select h-100 w-75 ms-4" 
            aria-label="Default select example">
            @foreach ($units as $unit )
            <option value="{{ $unit->id }}">{{ $unit->nama_satuan }}</option>
            @endforeach
        </select>
</div>
