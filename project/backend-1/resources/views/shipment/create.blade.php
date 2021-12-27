<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content " style="width: 650px; transform:translate(-12%,0%);">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Pengiriman</h5>
        <button 
            type="button" 
            class="btn-close" 
            data-bs-dismiss="modal" 
            aria-label="Close">
        </button>
        </div>
        <form action="{{ route('shipment-store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="modal-body">
                
                    <div class="mb-1 d-flex align-items-center" >
                        <label for="" class="ms-3" style="width: 100px;">Layanan</label>
                        <input 
                        type="text"
                        name="layanan" 
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        placeholder="Layanan">
                    </div>
                    
                    <div class=" d-flex align-items-center" >
                        <label for="" class="ms-3" style="width:100px;">Kode Layanan</label>
                        <input 
                        type="text"
                        name="kode_layanan" 
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
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        placeholder="Informasi Jenis Pembayaran">
                    </div>
                    
                    <div class="mb-3 d-flex align-items-center" >
                        <label for="" class="ms-3" style="width: 100px;">
                           Minimal
                        </label>
                        <input 
                        type="number"
                        name="minimal" 
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        placeholder="Minimal">
                    </div>
                    
                    <div class="mb-3 d-flex align-items-center" >
                        <label for="" class="ms-3" style="width: 100px;">
                           Maksimal
                        </label>
                        <input 
                        type="number"
                        name="maksimal" 
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        placeholder="Maksimal">
                    </div>
                    
                    <div 
                            class="mb-3 d-flex align-items-center" >
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
                                <option value="{{ $unit->id }}">{{ $unit->nama_satuan }}</option>
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
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp"
                        placeholder="Informasi Pengiriman">
                        </textarea>
                    </div>
                    <input type="hidden" value="Active" name="status">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary mt-4 ms-3">Submit</button>
            </div>
        </form>
    </div>
    </div>
</div>