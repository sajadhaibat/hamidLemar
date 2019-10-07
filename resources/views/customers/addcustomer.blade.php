<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Add Customer</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet')}}" />
    <!-- Custom Css -->
    <link  rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">
                                <li><a href="image-gallery.html">Image Gallery</a> </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>                         <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                    <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
@include('includes.aside')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                    </div>
                </div>
            </div>
        </div>
        <!-- Input -->
        @include('includes.successmessages')
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add Customers</strong> <small>Add a new customer from here.</small> </h2>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Personal Information</h2>
                        <form  action="{{route('customers.store')}}"  method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                            <div class="row clearfix">

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="User or Company name" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="number" class="form-control" name="phone" placeholder="Phone Number" required/>
                                </div>
                                <div class="form-group">
                                    <label for="">Point of Contact</label>
                                    <input type="text"  class="form-control" name="poc" placeholder="Point of Contact" required/>
                                </div>
                                <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
                            </div>
                        </div>
                        </form>
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-6" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-6" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-4" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-4" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-4" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-3" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-3" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-3" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-3 col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="col-sm-3" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <h2 class="card-inside-title">Input Status</h2>--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" value="Focused" placeholder="Statu Focused" />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="Disabled" disabled />--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->
        <!-- Textarea -->
{{--        <div class="row clearfix">--}}
{{--            <div class="col-lg-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="header">--}}
{{--                        <h2><strong>Textarea</strong></h2>--}}
{{--                        <ul class="header-dropdown">--}}
{{--                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
{{--                                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <li><a href="javascript:void(0);">Action</a></li>--}}
{{--                                    <li><a href="javascript:void(0);">Another action</a></li>--}}
{{--                                    <li><a href="javascript:void(0);">Something else</a></li>--}}
{{--                                    <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="body">--}}
{{--                        <h2 class="card-inside-title">Basic Example</h2>--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="form-line">--}}
{{--                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- #END# Textarea -->
        <!-- Select -->
{{--        <div class="row clearfix">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="header">--}}
{{--                        <h2> <strong>Select</strong> <small>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></small> </h2>--}}
{{--                        <ul class="header-dropdown">--}}
{{--                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
{{--                                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <li><a href="javascript:void(0);">Action</a></li>--}}
{{--                                    <li><a href="javascript:void(0);">Another action</a></li>--}}
{{--                                    <li><a href="javascript:void(0);">Something else</a></li>--}}
{{--                                    <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="body">--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <select class="form-control show-tick">--}}
{{--                                    <option value="">-- Please select --</option>--}}
{{--                                    <option value="10">10</option>--}}
{{--                                    <option value="20">20</option>--}}
{{--                                    <option value="30">30</option>--}}
{{--                                    <option value="40">40</option>--}}
{{--                                    <option value="50">50</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <select class="form-control" disabled>--}}
{{--                                    <option value="">Disabled</option>--}}
{{--                                    <option value="10">10</option>--}}
{{--                                    <option value="20">20</option>--}}
{{--                                    <option value="30">30</option>--}}
{{--                                    <option value="40">40</option>--}}
{{--                                    <option value="50">50</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- #END# Select -->
        <!--DateTime Picker -->
{{--        <div class="row clearfix">--}}
{{--            <div class="col-lg-12 col-md-12 col-sm-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="header">--}}
{{--                        <h2><strong>DateTime</strong> Picker <small>Taken from <a href="https://github.com/T00rk/bootstrap-material-datetimepicker" target="_blank">github.com/T00rk/bootstrap-material-datetimepicker</a> with <a href="http://momentjs.com/" target="_blank">momentjs.com</a></small> </h2>--}}
{{--                        <ul class="header-dropdown">--}}
{{--                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
{{--                                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                    <li><a href="javascript:void(0);">Action</a></li>--}}
{{--                                    <li><a href="javascript:void(0);">Another action</a></li>--}}
{{--                                    <li><a href="javascript:void(0);">Something else</a></li>--}}
{{--                                    <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="body">--}}
{{--                        <div class="row clearfix">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="input-group">--}}
{{--                                    <span class="input-group-addon">--}}
{{--                                        <i class="zmdi zmdi-time"></i>--}}
{{--                                    </span>--}}
{{--                                    <input type="text" class="form-control timepicker" placeholder="Please choose a time...">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <div class="input-group">--}}
{{--                                    <span class="input-group-addon">--}}
{{--                                        <i class="zmdi zmdi-calendar"></i>--}}
{{--                                    </span>--}}
{{--                                    <input type="text" class="form-control datetimepicker" placeholder="Please choose date & time...">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--#END# DateTime Picker -->
    </div>
</section>

<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script> <!-- Moment Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{asset('assets/js/pages/forms/basic-form-elements.js')}}"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:12 GMT -->
</html>
