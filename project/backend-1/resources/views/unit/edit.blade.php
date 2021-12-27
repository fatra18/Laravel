 
                    <div class="mb-2 d-flex align-items-center" >
                        <label 
                            class="ms-3" 
                            style="width: 100px;"
                            @error('nama_satuan')
                                
                            @enderror>
                            Nama Satuan @error('nama_satuan')
                                !{{ $message }}
                            @enderror
                        </label>
                        <input 
                        type="text"
                        name="nama_satuan"
                        id="nama_satuan"
                        value="{{ $data->nama_satuan }}" 
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        aria-describedby="emailHelp"
                        placeholder="Kode Satuan">
                    </div>
                    
                    <div class="mb-2 d-flex align-items-center" >
                        <label 
                            class="ms-3" 
                            style="width: 100px;"
                            @error('kode_satuan')
                                
                            @enderror>
                            Kode Satuan @error('kode_satuan')
                                !{{ $message }}
                            @enderror
                        </label>
                        <input 
                        type="string"
                        name="kode_satuan"
                        id="kode_satuan"
                        value="{{ $data->kode_satuan }}" 
                        class="form-control border-left-dark shadow h-100 w-75 ms-4" 
                        aria-describedby="emailHelp"
                        placeholder="Kode Satuan">
                    </div>
                    <input type="hidden" value="Active" name="status">     