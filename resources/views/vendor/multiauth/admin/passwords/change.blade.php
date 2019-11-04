


<!doctype html>
<html class="no-js " lang="en">

<head>
    <title>Add New User</title>
    @include('includes.head')
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <!-- Custom Css -->

</head>
<body class="theme-black">
<!-- Page Loader -->


<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->

@include('includes.aside')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="card">
                    <div class="header">
                        <h2><strong>Change Your Password</strong>  </h2>
                    </div>
                    <div class="body">
                        @include('multiauth::message')
                        <form method="POST" action="{{ route('admin.password.change') }}" aria-label="{{ __('Admin Change Password') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="oldPassword" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                <div class="col-md-6">
                                    <input id="oldPassword" type="password" class="form-control{{ $errors->has('oldPassword') ? ' is-invalid' : '' }}" name="oldPassword" value="{{ $oldPassword ?? old('oldPassword') }}"
                                           required autofocus> @if ($errors->has('oldPassword'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('oldPassword') }}</strong>
                                    </span> @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                           required> @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Change Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>


<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
</body>

</html>
