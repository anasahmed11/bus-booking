<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>go-lodger | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap-rtl.min.css')}}">
    <!-- template rtl version -->
    <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/custom-login-v2.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page">
<div class="row jumbotron vertical-center">
    <div class=" col-md-10  col-lg-10 col-xl-3 offset-md-1 " >
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-box-body">
                <div class="login-logo">
                    <img src="{{ url('/dist/img/logo.png') }}" >
                </div>
                <h4 class="login-box-msg">ادخل حسابك وكلمة المرور </h4>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group has-feedback">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="البريد الالكتروني">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                        @enderror
                    </div>
                    <div class="form-group has-feedback">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="كلمه المرور">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="form-group has-feedback text-center">
                        <button type="submit" class="btn btn-amwal">دخول</button>
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                  <p>- OR -</p>
                  <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a>
                  <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
                </div> -->
                <!-- /.social-auth-links -->

                <!-- <a href="#">I forgot my password</a><br>
                <a href="register.html" class="text-center">Register a new membership</a> -->

            </div>
            <!-- /.login-box-body -->
        </div>
    </div>
</div>

<!-- iCheck -->
</body>
</html>
