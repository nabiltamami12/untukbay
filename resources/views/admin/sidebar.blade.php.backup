<!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-color: #ffffff;">
    <!-- Brand Logo -->
  <!--   <a href="index3.html" class="brand-link">
      <img src="lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->
    <div> <br/></div>
           
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" >
          <a href="#" class="d-block text-dark"> {{ Auth::user()->name }}</a>
          @if(Auth::user()->username=='admin')
           <br/>
           <p class="text-dark">ADMIN</p>
          @else
           <br/>
             <p class="text-dark">PETUGAS</p>
          @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview"> -->
        <!--   <li class="nav-item">
            <a href="{{ url('kategori') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie text-dark"></i>
              <p class="text-dark">
                Jadwal
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li> -->
          @if(Auth::user()->username=='admin')
          <li class="nav-item">
            <a href="{{ url('padam') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt text-dark"></i>
               <p class="text-dark">
                Jadwal
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('trafo') }}" class="nav-link">
                <i class="nav-icon fa fa-bolt text-dark"></i>
           <p class="text-dark">
                Trafo
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
               <i class="fas fa-sign-out-alt text-dark"></i>
              <p class="text-dark">
                Logout
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
       @else
           <li class="nav-item">
            <a href="{{ url('logout') }}" class="nav-link">
               <i class="fas fa-sign-out-alt text-dark"></i>
              <p class="text-dark">
                Logout
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
            @endif
          
       <!--        <li class="nav-item">
                <a href="{{ url('kategori') }}" class="nav-link active">
                  <p>KATEGORI</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('padam') }}" class="nav-link active">
                  <p>PEMADAMAN</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('trafo') }}" class="nav-link active">
                  <p>TRAFO</p>
                </a>
              </li> -->
             <!--  <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
    <!--       <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul> -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>