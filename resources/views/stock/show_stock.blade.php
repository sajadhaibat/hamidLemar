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
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Stock List</strong><small>See Stock Detail here.</small>  </h2>
                    </div>
                    <div class="body">
                       <h4>{{$item->name}} Records in stock</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>NO#</th>
                                    <th> Quantity</th>
                                    <th>insertion date</th>
                                    <th>Parches Price</th>
                                    <th>Sell Price</th>
                                    <th>Description </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $id=1; ?>
                                @foreach($stocks as $item)
                                    <tr>
                                        <td>{{$id++}}</td>
                                        <td>{{$item->quantity }}</td>
                                        <td>{{$item->date}} </td>
                                        <td>{{ $item->buy_amount }}</td>
                                        <td>{{ $item->sale_amount }}</td>
                                        <td>{{ $item->details }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>


<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<!-- Jquery DataTable Plugin Js -->
<script src="assets/bundles/datatablescripts.bundle.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>
