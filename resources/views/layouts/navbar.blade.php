 <!-- Page Wrapper -->
  <div id="wrapper" style="background-image: url('{{ asset('templatelogin/images/PLN2.png')}} '); font-size:12px; text-transform:uppercase;">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar" style="width:700%;height:700%;">

      <!-- Sidebar - Brand -->
      <br>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">

        <div class="sidebar-brand-icon rotate-n-15" >

          <i class="fas fa-bolt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{Auth::user()->name}}</div>
      </a>
     <br>
<!-- 
 <p style="text-transform: uppercase; text-align: center;" class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->role}}</p> -->
      <!-- Divider -->
      <hr class="sidebar-divider my-0" style="padding-top: -10px;">

    
@if(Auth::user()->role=="admin")
  <!-- Nav Item - Dashboard -->
      <li class="nav-item" style="text-align:left">
        <a class="nav-link" href="{{url('dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="text-align:left">
        MENU KELOLA DATA
      </div>

          <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item" style="text-align:left">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>KELOLA DATA</span>
        </a>
        <div id="collapseUtilities" class="collapse " aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="text-align:left">
          <div class="py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">KELOLA DATA:</h6> -->
            <a class="collapse-item" href="{{ url('padam') }}">JADWAL PEMADAMAN</a>
            <a class="collapse-item" href="{{ url('akun') }}">AKUN PETUGAS</a>
            <a class="collapse-item" href="{{ url('trafo') }}">DATA TRAFO</a>
            <a class="collapse-item" href="{{ url('material') }}">DATA MATERIAL</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading" style="text-align:left">
        MENU LAPORAN
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item" style="text-align:left">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>LAPORAN</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" style="text-align:left">
          <div class="py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">LAPORAN:</h6> -->
            <a class="collapse-item" href="{{ url('laporan/pemadaman') }}">LAPORAN PEMADAMAN</a>
            <a class="collapse-item" href="{{ url('laporan/pekerjaan') }}">LAPORAN PEKERJAAN</a>
          <!--   <a class="collapse-item" href="{{ url('/laporan/peminjaman_material') }}">LAPORAN PEMINJAMAN<br>MATERIAL</a> -->
            <div class="collapse-divider"></div>
            <!-- <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> -->
          </div>
        </div>
      </li>

@else

      <!-- Heading -->
      <div class="sidebar-heading" style="text-align:left">
        MENU PETUGAS
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>PETUGAS</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">MENU:</h6> -->
            <a class="collapse-item" href="{{ url('padam') }}">JADWAL PADAM</a>
            <div class="collapse-divider"></div>
            <!-- <a class="collapse-item" href="{{ url('pinjam_material') }}">PEMINJAMAN MATERIAL</a> -->
            <!-- <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a> -->
          </div>
        </div>
      </li>

@endif

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" style="width:auto">

          <!-- Sidebar Toggle (Topbar) -->
          <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
          </form>

          <strong style="color:#212121; font-size:1em;width:85%">SISTEM INFORMASI PERENCANAAN PEMADAMAN LISTRIK DAERAH BANYUWANGI BERBASIS WEB</strong>

                 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto" style="width:10%;">

          

          


            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow" >
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
             <!--  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span style="text-transform: uppercase;" class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->role}}</span> -->
                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              <!-- </a> -->
              <!-- Dropdown - User Information -->
            <!--   <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown"> -->
              <!--   <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a> -->
              <!--   <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div> -->
            </li>

          </ul>

        </nav>
