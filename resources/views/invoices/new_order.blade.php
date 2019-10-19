
<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Add New Order</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
    <!-- Custom Css -->
    <link  rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
    <link rel="stylesheet" href="assets/plugins/multi-select/css/multi-select.css">
    <!-- Bootstrap Spinner Css -->
    <link rel="stylesheet" href="assets/plugins/jquery-spinner/css/bootstrap-spinner.css">
    <!-- Bootstrap Tagsinput Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />



</head>
<body class="theme-black">
<!-- Page Loader -->
{{--<div class="page-loader-wrapper">--}}
{{--    <div class="loader">--}}
{{--        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>--}}
{{--        <p>Please wait...</p>--}}
{{--    </div>--}}
{{--</div>--}}
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
            </div>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add New Order</strong> <small>Add New Order from here.</small> </h2>
                    </div>
                    <div class="body">
                        <form  action="{{route('recevied_orders.store')}}"  method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                            <div class="row clearfix">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Items</label>
                                        <select class="form-control" name="customer_id" required>
                                            <option selected disabled value="">Select Customer
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label>Part Number</label>--}}
                                    {{--                                        <input type="number" class="form-control" name="part_number" placeholder="Part Number" required/>--}}
                                    {{--                                    </div>--}}
                                    <div class="form-group">
                                        <label>Items</label>
                                        <select class="form-control" id="item_id" name="item_id[]" multiple required>
                                            <option disabled value="">Select item
                                            @foreach($items as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="form-group">
                                        <div class="dynamic-fields">
{{--                                            <input type="text" name="option[0]" value="asc" >--}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Order Number</label>
                                        <input type="text" class="form-control" name="order_number" placeholder="Order Number" required/>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Sale Amount</label>--}}
{{--                                        <input type="number"  class="form-control" name="sale_amount" placeholder="Sale Amount" required/>--}}
{{--                                    </div>--}}
                                    {{--                                    <div class="form-group">--}}
                                    {{--                                        <label for="">Item Location</label>--}}
                                    {{--                                        <input type="text"  class="form-control" name="item_location" placeholder="Item Location" required/>--}}
                                    {{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="">Order Date</label>
                                        <input type="date"  class="form-control" name="date" required/>
                                    </div>
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
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
<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/forms/advanced-form-elements.js"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#item_id').select2({
            placeholder: "Select Items"
        });
    });
</script>
<script>
    $(function () {
        $('#item_id').on('change', function(e) {
            var cacheEle = $('.dynamic-fields');
            $(this).find('option').each(function(index, element) {
                if (element.selected) {
                    if (cacheEle.find('input[name="option\\[' + element.value + '\\]"]').length == 0) {
                   //     cacheEle.append('<input type="text" name="option[' + element.value + ']" value="' + element.text + '">');
                        cacheEle.append('<input type="text" name="option[' + element.value + ']" value="' + element.text + '" style="display: none"><ol><lable value="' + element.text + '" style=" ' +
                            '    float: left;\n' +
                            '    font-size: 13px;\n' +
                            '    line-height: 18px;\n' +
                            '    padding-top: 6px;\n' +
                            '    text-align: right;\n' +
                            '    width: 130px;"><b>' +  element.text + ' : '+ '</b></lable><input placeholder="Ordered Quantity" name="quantity[' + element.value + ']" type="number" size="30" style="margin-left: 60px;"></ol>');
                    }
                }  else {
                    cacheEle.find('input[name="option\\[' + element.value + '\\]"]').remove();
                }
            });
        });
    });
</script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:12 GMT -->
</html>
