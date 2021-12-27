 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar bg-white sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a  class="sidebar-brand d-flex align-items-center justify-content-center bg-warning  " 
        href="index.html" 
        style="border-radius:0px 0px 0px 100px; ">
        <div class="sidebar-brand-icon rotate-n-15 ">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-1"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-book"></i>
            <span>Catatan</span>
        </a>
        <div id="collapse-1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('note') }}">Index Catatan</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-2"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-comments"></i>
            <span>Pesan</span>
        </a>
        <div id="collapse-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('massage') }}">Index Pesan</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-3"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-truck"></i>
            <span>Pengirim</span>
        </a>
        <div id="collapse-3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('delivery') }}">Index Pengirim</a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-4"
            aria-expanded="true" aria-controls="collapse-4">
            <i class="fas fa-balance-scale"></i>
            <span>Laporan</span>
        </a>
        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('history') }}">
                    <i class="fas fa-exclamation-triangle text-primary mr-1"></i>
                    Riwayat Pemesanan                
                </a>
                <a class="collapse-item" href="{{ route('income') }}">
                    <i class="fas fa-comment-dollar text-primary mr-1"></i>
                    Riwayat Pendapatan
                </a>
            </div>
        </div>
    </li>
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-5"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-file"></i>
            <span>Master</span>
        </a>
        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('item') }}">
                    <i class="fas fa-columns mr-2 text-primary"></i>
                    Jenis Barang
                </a>
                <a class="collapse-item" href="{{ route('unit') }}">
                    <i class="fas fa-fax mr-2 text-primary"></i>                    
                    Jenis Satuan
                </a>
                <a class="collapse-item" href="{{ route('size') }}">
                    <i class="fas fa-sitemap mr-1 text-primary"></i>
                    Jenis Ukuran
                </a>
                <a class="collapse-item" href="{{ route('payment') }}">
                    <i class="fas fa-wallet mr-2 text-primary"></i>
                    Jenis Pembayaran
                </a>
                <a class="collapse-item" href="{{ route('shipment') }}">
                    <i class="fas fa-truck mr-1 text-primary"></i>                    
                    Jenis Pengiriman
                </a>
                <a class="collapse-item" href="{{ route('status_delivery') }}">
                    <i class="fas fa-truck-loading text-primary"></i>                    
                    Status Pengiriman
                </a>
                <a class="collapse-item" href="{{ route('status_pickup') }}">
                    <i class="fas fa-truck-pickup text-primary"></i>                    
                    Status Angkut/Pickup
                </a>
                <a class="collapse-item" href="{{ route('rate') }}">
                    <i class="fas fa-percent text-primary"></i></i>                    
                    Jenis Tarif
                </a>
            </div>
        </div>
    </li>
    

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-3"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-truck"></i>
            <span>Cabang</span>
        </a>
        <div id="collapse-3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('branch') }}">Index Pengirim</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class=" fas fa-user-alt"></i>
            <span>Akun</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('employee') }}">Pegawai</a>
                <a class="collapse-item" href="{{ route('admin') }}">Admintrastor</a>
            </div>
        </div>
    </li>
    
</ul>
<!-- End of Sidebar -->