<!DOCTYPE html>
<html lang="en">
<head>
    <title>PT PLN Persero</title>

  <link rel="icon" type="image/jpg" href="{{ asset('/startbootstrap-sb-admin-2-master/img/Logo-PLN-Terbaru.jpg') }} ">
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1 , user-scalable=no">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/jpg" href="{{ asset('/material-dashboard-master/assets/img/Logo-PLN-Terbaru.jpg')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templatelogin/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body >

    <div class="limiter" style=" font-family: 'MyriadPro-light'; color: #000">
        <div class="container-login100" style="background-image: url('{{ asset('templatelogin/images/PLN2.png')}} ');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-tittle p-b-41">

             
            </span>

          @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form  method="POST" action="{{ route('login') }}">
                @csrf
                @if ($errors->has('username') || $errors->has('password'))
                <div class="alert alert-danger alert-block" >

                    <strong style="margin-bottom: -4rem;">{{ $errors->first('username') ?: $errors->first('password') }}</strong>

                </div>
                @endif
                <div class="wrap-input100 validate-input " data-validate = "Enter username"  >
                    <input style="font-size:12px;" class="input100  form-control" type="text"  required name="login" placeholder="Username" oninvalid="setCustomValidity('Field ini tidak boleh kosong')" oninput="setCustomValidity('')">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>

                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input style="font-size:12px;" class="input100 form-control" type="password" required name="password" placeholder="Password" oninvalid="setCustomValidity('Field ini tidak boleh kosong')" oninput="setCustomValidity('')">

                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                        <div class="container-login100-form-btn m-t-32">
                            <button type="submit" class="login100-form-btn">
                               {{ __('Login') }}
                           </button>
                       </div>

                   </form>
               </div>
           </div>
       </div>


       <div id="dropDownSelect1"></div>

       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/vendor/animsition/js/animsition.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/vendor/bootstrap/js/popper.js')}}"></script>
       <script src="{{asset('templatelogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/vendor/select2/select2.min.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/vendor/daterangepicker/moment.min.js')}}"></script>
       <script src="{{asset('templatelogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/vendor/countdowntime/countdowntime.js')}}"></script>
       <!--===============================================================================================-->
       <script src="{{asset('templatelogin/js/main.js')}}"></script>

   </body>
   </html>