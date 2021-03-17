<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" >

 
 @include('admin/sidebar')
  

  <!-- Content Wrapper. Contains page content -->
 <!--  <div class="content-wrapper" style=" background-image: url('{{asset('/lte/background/admin-background.jpeg')}}');"> -->
    @if(Auth::user()->username=='admin')
   <div class="content-wrapper" style=" background-color: #003b77;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

   @yield('content')

  </div>




 @else
<div class="content-wrapper" style="background-image: url('{{asset('/lte/background/admin-background.jpeg')}}'); background-size: 120%">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top: 20rem ">
            <!-- <div class="card"> -->
                        <a href="{{ url('ceklis') }}">
                         <button type='button' class='btn btn-default center-block'> CEKLIST TRAFO</button>
                        </a>
                <!-- </div> -->
            </div>
            <div class="col-md-2" style="padding-top: 20rem ">
            <!-- <div class="card"> -->
                         <a href="{{ url('darurat') }}">
                         <button type='button' class='btn btn-default center-block'> DARURAT</button>
                        </a>
                <!-- </div> -->
            </div>
        </div>
    </div>
    @endif

  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" >
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
