
<!doctype html>
<html class="no-js " lang="en">

<head>
    <title>Stock List</title>
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
                        <h2><strong>Add New User</strong><small>Fill all the fields</small>  </h2>
                    </div>
                    <div class="body">
                        @include('multiauth::message')
                        <form method="POST" action="{{ route('admin.register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                           required autofocus>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                           required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                           required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">Assign Role</label>

                                <div class="col-md-6">
                                    <select name="role_id[]" id="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                        <option selected disabled>Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Register
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
