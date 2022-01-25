<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PUSTAKA </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>


<!-- Nav Item - Tables -->


<li class="nav-item">
    <a class="nav-link" href="{{url('/addBuku')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Buku</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{url('/addAnggota')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Anggota</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{url('/addPeminjaman')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data Peminjaman</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Peminjaman:</h6>
                        <a class="collapse-item" href="{{url('/cetak')}}">Laporan Data Peminjaman</a>
                    </div>
                </div>
            </li>

<li class="nav-item">
    <a class="nav-link" href="{{url('/addUser')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Data User</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->