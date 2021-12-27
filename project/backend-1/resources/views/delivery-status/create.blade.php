  {{-- Nama Status Pengiriman --}}
  <div 
  class="mb-1 d-flex align-items-center" >
<label 
  class="ms-3" 
  style="width: 100px;">
  Nama Status Pengiriman
</label>
<input 
type="text"
name="nama_status_pengiriman" 
class="form-control border-left-dark shadow h-100 w-75 ms-4" 
id="exampleInputEmail1" 
aria-describedby="emailHelp"
placeholder="Nama Status Pengiriman">
</div>
{{-- End Status Pengiriman --}}

{{-- Kode Status Pengiriman --}}
<div 
  class="mb-1 d-flex align-items-center" >
<label 
  class="ms-3" 
  style="width:100px;">
  Kode Status Pengiriman
</label>
<input 
type="text"
name="kode_status_pengiriman" 
class="form-control border-left-dark shadow h-100 w-75 ms-4" 
id="exampleInputEmail1" 
aria-describedby="emailHelp"
placeholder="Kode Status Pengiriman">
</div>
{{-- End Kode Status Pengiriman --}}

{{-- Informasi Status Pengiriman --}}
<div class="mb-1 d-flex align-items-center" >
<label 
  class="ms-3" 
  style="width: 100px;">
  Informasi Status Pengiriman
</label>
<textarea 
type="text"
name="informasi_status_pengiriman" 
class="form-control border-left-dark shadow h-100 w-75 ms-4" 
id="exampleInputEmail1" 
aria-describedby="emailHelp"
placeholder="Informasi Status Pengiriman">
</textarea>
</div>
{{-- End Informasi Status Pengiriman --}}

{{-- Satuan Panjang --}}
<div class="mb-1 d-flex align-items-center flex-wrap col">
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
      value="Shuttle" 
      id="flexRadioDefault1">
  <label 
      class="form-check-label" 
      for="flexRadioDefault1"
      style="margin-left:30px;">
  Shuttle
  </label>
</div>

<div class="form-check col-2">
  <input 
      class="form-check-input"
      style="margin-left:0px;" 
      type="radio" 
      name="tipe_status"
      value="Forward" 
      id="flexRadioDefault2" checked>
  <label 
      class="form-check-label"
      style="margin-left:20px;" 
      for="flexRadioDefault2">
  Forward
  </label>
</div>

<div class="form-check col-2">
  <input 
      class="form-check-input"
      style="margin-left:10px;" 
      type="radio" 
      name="tipe_status"
      name="Transit" 
      id="flexRadioDefault1">
  <label 
      class="form-check-label"
      style="margin-left:30px;" 
      for="flexRadioDefault1">
  Transit
  </label>
</div>
<div class="form-check col-2">
  <input 
      class="form-check-input"
      style="margin-left: 0px;" 
      type="radio" 
      name="tipe_status"
      value="Release" 
      id="flexRadioDefault2" checked>
  <label 
      class="form-check-label"
      style="margin-left: 20px;"  
      for="flexRadioDefault2">
  Release
  </label>
</div>
<div class="form-check col-4">
  <input 
      class="form-check-input"
      style="margin-left:109px;" 
      type="radio" 
      name="tipe_status"
      value="Proses" 
      id="flexRadioDefault1">
  <label 
      class="form-check-label"
      style="margin-left:135px;"  
      for="flexRadioDefault1">
  Proses
  </label>
</div>
<div class="form-check">
  <input 
      class="form-check-input ms-2" 
      type="radio" 
      name="tipe_status"
      value="Tertunda" 
      id="flexRadioDefault2">
  <label 
      class="form-check-label ms-4" 
      for="flexRadioDefault2">
  Tertunda
  </label>
</div>
<div class="form-check">
  <input 
      class="form-check-input ms-2" 
      type="radio" 
      name="tipe_status"
      value="Kembali" 
      id="flexRadioDefault1">
  <label 
      class="form-check-label ms-4" 
      for="flexRadioDefault1">
  Kembali
  </label>
</div>
<div class="form-check">
  <input 
      class="form-check-input ms-1" 
      type="radio" 
      name="tipe_status"
      value="Selesai" 
      id="flexRadioDefault2" >
  <label class="form-check-label ms-4" for="flexRadioDefault2">
  Selesai
  </label>
</div>
</div>
{{-- End Satuan Panjang --}}

{{-- Start Status --}}
<input type="hidden" value="Active" name="status">
{{-- End Status --}}
