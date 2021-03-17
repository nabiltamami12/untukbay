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
        <div class="col-md-5" style="padding-top: 15rem ">
            <!-- <div class="card"> -->
            <div class="card-body login-card-body ">
                <form method="POST" action="{{ route('login') }}">
                    <div class="form-check text-center">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                    <div class="form-check text-center">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                    <div class="form-check text-center">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                    <div class="form-check text-center">
                      <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        Default checkbox
                      </label>
                    </div>
                         <br/>
                       <label for="textarea">Example textarea</label>
     <br/>
                       <textarea id="textarea" rows="3" style="width: 25rem;"></textarea>
                                <button type="submit" class="btn btn-primary" style="margin-left: 180px;    margin-top: 25px;margin-bottom: 25px;" >
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
