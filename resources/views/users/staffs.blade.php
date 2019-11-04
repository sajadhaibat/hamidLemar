<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Staffs</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
    <!-- Custom Css -->
    <link  rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('assets/images/logo.svg')}}" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->

@include('includes.aside')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
            </div>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Staffs List</strong> <small>See Staffs from here.</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-list" href="" data-toggle="modal" data-target="#staff-modal"> <i class="fa fa-plus"></i> Add New Staff</a>
                            </div>
                            <div class="col-md-8">
                                @include('includes.successmessages')
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered" id="editableTable">
                                    <thead>
                                    <tr style="cursor: pointer;">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Position</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($staffs as $staff)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td data-field="name">1</td>
                                            <td data-field="name">{{ $staff->name }}</td>
                                            <td data-field="name">{{ $staff->phone }}</td>
                                            <td data-field="name">{{ $staff->position }}</td>
                                            <td> <button class="btn btn-success  btn-sm"

                                                         style="color: white"  data-toggle="modal" data-target="#staf">Edit <i class="zmdi zmdi-edit" style="color: white"></i></button></td>
                                            <td>
                                                <form action="{{route('staff.destroy',$staff->id)}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger  btn-sm">Delete <i class="zmdi zmdi-delete "></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="modal fade " id="staff-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Add New Staff</h3>
            </div>
            <div class="modal-body">
                <form action="{{route('staff.store')}}" enctype="multipart/form-data" method="post" id="labratory_form">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

                    <div class="form-group">
                        <label>Staff Name</label>
                        <input type="text" class="form-control" name="staff_name" placeholder="Enter Staff Name" required>
                    </div>
                    <div class="form-group">
                        <label>Staff Number</label>
                        <input type="number" class="form-control" name="staff_number" placeholder="Enter StafF Phone number" required>
                    </div>

                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Enter Staff Position" required>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>

                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
</body>

</html>
