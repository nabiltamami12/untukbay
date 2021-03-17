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
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" >
 @include('admin/sidebar')
<div class="content-wrapper" style=" background-color: #003b77;">
    <div class="row justify-content-center">
        <div class="col-md-5" style="padding-top: 4rem ">
            <!-- <div class="card"> -->
            <div class="card-body login-card-body" style="border-radius: 30px;">
               <form action="{{url ('/padam/create')}}" method="POST">
                        @csrf
                  
                     @foreach($trafo_for_padam as $item)
     <!--                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                             <label class="input-group-text" for="inputGroupSelect01">ID</label>
                        </div>
                            <input type="text" class="form-control" name="kode_trafo" placeholder="{{ $item->id }}">
                        </div> -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">TANGGAL</label>
                        </div>
                            <input class="form-control" type="date" name="tanggal" value="{{ $item->tanggal }}" id="example-date-input">
                        </div>
                         <div class="input-group mb-3">
                        <div class="input-group-prepend">
                             <label class="input-group-text" for="inputGroupSelect01">KODE TRAFO</label>
                        </div>
                            <input type="text" class="form-control" name="kode_trafo" value="{{ $item->kode_trafo }}">
                        </div>
                          <div class="input-group mb-3">
                        <div class="input-group-prepend">
                             <label class="input-group-text" for="inputGroupSelect01">LOKASI</label>
                        </div>
                            <input type="text" class="form-control" name="lokasi" value="{{ $item->lokasi }}" >
                        </div>
                          <div class="input-group mb-3">
                        <div class="input-group-prepend">
                             <label class="input-group-text" for="inputGroupSelect01">DESKRIPSI</label>
                        </div>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $item->deskripsi }}" >
                        </div>
                       <!-- <label for="textarea">DESKRIPSI</label>
                        <br/>
                       <textarea name="deskripsi" id="textarea" rows="3" style="width: 26rem;border-radius: 10px; font-color: red" placeholder="{{ $item->deskripsi }}" value="{{ $item->deskripsi }}" >
                       </textarea> -->
                           @endforeach
                                <button type="submit" class="btn btn-primary" style="margin-left: 180px;    margin-top: 25px;margin-bottom: 25px; border-radius: 10px;" >
                                    {{ __('KIRIM') }}
                                </button>
                </form>
            </div>
                <!-- /.login-box -->
      
           
        </div>
    </div>

  <!-- /.content-wrapper -->
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
