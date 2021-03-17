        @if(Auth::user()->role=='admin')
 
 <div class="sidebar" style="background-color: #319ce8"  >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
           <center><img src="{{ asset('/material-dashboard-master/assets/img/Logo-PLN-Terbaru.jpg') }}" style="max-height: 10rem;"></center>
          </div>
      
     
              <div class="sidebar-wrapper">
                <!--   <p class="text-dark " style=" font-size: 13px;text-transform: uppercase;text-align: center; font-weight:900" >{{ Auth::user()->name }} | {{ Auth::user()->role }}</p> -->
        <ul class="nav" >
            <li class="nav-item {{ request()->is('padam') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('padam') }}">
              <i class="material-icons">date_range</i>
              <p style=" margin-top: -7px;margin-bottom: -20px;text-transform: uppercase;">Kelola jadwal </p><br ><p style="text-transform: uppercase;padding-left:46px;margin-bottom: -10px;">pemadaman</p>
            </a>
          </li> 
               <li class="nav-item {{ request()->is('akun') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('akun') }}">
              <i class="material-icons">person</i>
              <p style="text-transform: uppercase;">kelola akun Petugas</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('trafo') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('trafo') }}">
              <i class="material-icons">settings_input_composite</i>
              <p style="text-transform: uppercase;">kelola data Trafo</p>
            </a>
          </li>
             <li class="nav-item {{ request()->is('material') ? 'active' : '' }} ">
            <a class="nav-link " href="{{ url('material') }}">
              <i class="material-icons">settings_input_composite</i>
              <p style="text-transform: uppercase;">Kelola stok Material</p>
            </a>
          </li>
          <li class="nav-item ">
      
          <button class="dropdown-btn" style="background-color: #319ce8; width: 20px; border: 2px; outline:  0px;padding-bottom: 10px;" >
              <i class="material-icons" style="padding-left:  28px; padding-top: 20px;">description</i>

              <p style="text-transform: uppercase; padding-left:  70px;font-weight: 900; padding-top: 20px;">Laporan
           <i class=" material-icons" style="margin-left: 60px; margin-top: -20px;">keyboard_arrow_down</i>

              </p>
              
  </button>
        </a>
      
    
           <!-- <li class="nav-item {{ request()->is('laporan/pemadaman') ? 'active' : '' }} ">
            <a class="nav-link dropdown-btn">
              <i class="material-icons">library_books</i>
              <p style="text-transform: uppercase;">laporan pemadaman</p>

            </a>
          </li>
         <li class="nav-item {{ request()->is('laporan/material') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ url('laporan/material') }}">
              <i class="material-icons">library_books</i>
            <p style=" margin-top: -7px;margin-bottom: -20px;text-transform: uppercase;">laporan material </p><br ><p style="text-transform: uppercase;padding-left:46px;margin-bottom: -10px;">trafo</p>
            </a>
          </li>
             <li class="nav-item {{ request()->is('/laporan/peminjaman_material') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ url('/laporan/peminjaman_material') }}">
              <i class="material-icons">library_books</i>
              <p style=" margin-top: -7px;margin-bottom: -20px;text-transform: uppercase;">laporan peminjaman</p><br ><p style="text-transform: uppercase;padding-left:46px;margin-bottom: -10px;">material</p>
             
            </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="{{ url('logout') }}">  
              <i class="material-icons">login</i>
              <p style="text-transform: uppercase;">Logout</p>
            </a>
          </li> -->

 
  
  <div class="nav-item dropdown-container" style="display: none;  ">
    <a style="padding-bottom: 5px;" class="nav-link {{ request()->is('/laporan/peminjaman_material') ? 'active' : '' }} " href="{{ url('laporan/pemadaman') }}">
    <i class="material-icons">description</i>
    <p style=" text-transform: uppercase;">laporan pemadaman</p>
    </a>
    <a style="padding-bottom: 5px;" class="nav-link" href="{{ url('laporan/pekerjaan') }}">
    <i class="material-icons">description</i>
  <p style="text-transform: uppercase;">laporan pekerjaan </p>
  </a>
  <a style="padding-bottom: 5px;" class="nav-link" href="{{ url('/laporan/peminjaman_material') }}">
              <i class="material-icons">description</i>
              <p style="text-transform: uppercase;">laporan peminjaman</p><br ><p style="text-transform: uppercase;padding-left:46px;margin-bottom: -10px;">material</p>
             
            </a>
  </div>
  <li class="nav-item">
             <a class="nav-link" href="{{ url('logout') }}">  
              <i class="material-icons">login</i>
              <p style="text-transform: uppercase;">Logout</p>
            </a>
          </li> 
<script >
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>


          
        <!--   <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">bubble_chart</i>
              <p style="text-transform: uppercase;">Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
        </ul>
      </div>
    
  </div>
          @else
            
 <div class="sidebar" style="background-color: #319ce8"  >
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
           <center><img src="{{ asset('/material-dashboard-master/assets/img/Logo-PLN-Terbaru.jpg') }}" style="max-height: 10rem;"></center>
          </div>
      
          
              <div class="sidebar-wrapper">
                 <p style="color: #fff; text-transform: uppercase;text-align: center; font-weight:900" >{{ Auth::user()->role }}</p>
        <ul class="nav">
         <!--  <li class="nav-item {{ request()->is('ceklis') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('ceklis') }}">
              <i class="material-icons">date_range</i>
              <p>Ceklis</p>
            </a>
          </li> -->
           <li class="nav-item {{ request()->is('padam') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('padam') }}">
              <i class="material-icons">date_range</i>
              <p style="text-transform: uppercase;">Informasi pemadaman</p>
            </a>
          </li>
           <li class="nav-item {{ request()->is('pinjam_material') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('pinjam_material') }}">
              <i class="material-icons">date_range</i>
              <p style="text-transform: uppercase;">Peminjaman Material</p>
            </a>
          </li>
            <!-- 
          <li class="nav-item {{ request()->is('material') ? 'active' : '' }}  ">
            <a class="nav-link" href="{{ url('material') }}">
              <i class="material-icons">dashboard</i>
              <p>Material</p>
            </a>
            
          </li>
        <li role="separator" class="divider"></li>
      <li class="nav-item {{ request()->is('komponen') ? 'active' : '' }}  ">
            <a class="nav-link" href="{{ url('komponen') }}">
              <i class="material-icons">memory</i>
              <p>Komponen</p>
            </a> 
          </li>   
          <li class="nav-item {{ request()->is('petugas') ? 'active' : '' }}">
            <a class="nav-link" href="  {{ url('petugas') }}">
              <i class="material-icons">person</i>
              <p>Petugas</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('trafo') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('trafo') }}">
              <i class="material-icons">settings_input_composite</i>
              <p>Trafo</p>
            </a>
          </li>
          <li class="nav-item {{ request()->is('laporan') ? 'active' : '' }} ">
            <a class="nav-link" href="{{ url('laporan') }}">
              <i class="material-icons">library_books</i>
              <p>Laporan</p>
            </a>
          </li> -->
          <li class="nav-item">
             <a class="nav-link" href="{{ url('logout') }}">  
              <i class="material-icons">login</i>
              <p style="text-transform: uppercase;">Logout</p>
            </a>
          </li>
        <!--   <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
        </ul>
      </div>
    
  </div>
  @endif

    <script type="application/javascript">
      
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(250);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(250);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#toggle-sidebar").click(function() {
  $(".page-wrapper").toggleClass("toggled");
});

    </script>