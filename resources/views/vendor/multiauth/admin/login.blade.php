



<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>
<body class="theme-black">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="row">

                <div class="col-lg-8 col-md-8 offset-lg-2">
                    <div class="company_detail">
                    </div>
                    <div class="card-plain">
                        <h4 class="logo" style="background-color: white;padding: 10px;color: black;border-radius: 10px;margin-bottom: 0px"><img src="{{asset('logo.png')}}" alt="" style="height: 97px;width: 200px"> </h4>

                        <div class="header">
                            <h5>Log in</h5>
                        </div>
                        <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
                            @csrf
                            <div class="input-group">
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="User Name" id="email" name="email" value="{{ old('email') }}"
                                       required autofocus>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif

                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password"
                                       required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-lock"></i></span>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif

                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <div class="footer">
                                <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                            </div>
                        </form>

                        <a href="{{ route('admin.password.request') }}" class="link">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>
