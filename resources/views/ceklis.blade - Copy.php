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
               <form action="{{url ('/trafo/create')}}" method="POST">
                        @csrf
                    <div class="form-check">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="10" name="status[]" >
                        KONTRUKSI TM 1
                      </label>
                    </div>
                    <div class="form-check ">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="20" name="status[]">
                        DUDUKAN CUT OUT SWITCH
                      </label>
                    </div>
                     <div class="form-check ">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="30" name="status[]">
                        DUDUKAN LIGTHING ARRESTER
                      </label>
                    </div>
                    <div class="form-check ">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="40" name="status[]">
                        DUDUKAN TRANSFORMATOR
                      </label>
                    </div>
                       <div class="form-check ">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="50" name="status[]">
                        DUDUKAN LV PANEL & PIPAR
                      </label>
                    </div>
                     <br/>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">LOKASI</label>
                      </div>
                      <select class="custom-select" id="lokasi" name="lokasi">
                        <!-- <option selected>Choose...</option> -->
                        <option value="banyuwangi">Banyuwangi</option>
                        <option value="genteng">Genteng</option>
                        <option value="gambiran">Gambiran</option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                             <label class="input-group-text" for="inputGroupSelect01">KODE TRAFO</label>
                        </div>
                            <input type="text" class="form-control" name="kode_trafo" placeholder="">
                        </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">TANGGAL</label>
                        </div>
                            <input class="form-control" type="date" name="tanggal" value="<?php echo date("Y-M-D");?>" id="example-date-input">
                        </div>
                       <label for="textarea">DESKRIPSI</label>
                        <br/>
                       <textarea name="deskripsi" id="textarea" rows="3" style="width: 26rem;border-radius: 10px;"></textarea>
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
