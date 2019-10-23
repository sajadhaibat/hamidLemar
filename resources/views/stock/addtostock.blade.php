
<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Add To Stock</title>
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
            <div class="row">
            </div>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-2"></div>

            <div class="col-lg-8 ">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add to Stock</strong> <small>Add New to Stock from here.</small> </h2>
                    </div>
                    <div class="body">
                        <h2 class="card-inside-title">Please Fill all the fields</h2>
                        <form  action="{{route('stock.store')}}"  method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                            <div class="row clearfix">

                                <div class="col-lg-12 col-md-12 col-sm-12 m-b-20">
                                    <b>Select Items</b>
                                    <select class="form-control z-index show-tick" data-live-search="true" name="item">
                                        <option value="" disabled selected>Select Item</option>
                                        @foreach($items as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="number" class="form-control" name="quantity" placeholder="quantity" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Buy Amount</label>
                                        <input type="number" class="form-control" name="buy_amount" placeholder="Buy Amount" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sale Amount</label>
                                        <input type="number"  class="form-control" name="sale_amount" placeholder="Sale Amount" required/>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="">Item Location</label>--}}
{{--                                        <input type="text"  class="form-control" name="item_location" placeholder="Item Location" required/>--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="">Date</label>
                                        <input type="date"  class="form-control" name="date" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Details</label>
                                        <textarea  class="form-control" name="details" placeholder="Description" required/></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
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
</body>

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/basic-form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:12 GMT -->
</html>
