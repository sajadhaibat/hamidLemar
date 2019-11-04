<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/jquery-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Daily Expenses</title>
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
        <div class="m-t-30"><img src="{{asset('assets/images/logo.svg')}}" width="48" height="48" alt="Hamid lemar"></div>
        <p>Please wait...</p>
    </div>
</div>

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
                        <h2><strong>Daily Expenses</strong><small>See Expenses from here.</small>  </h2>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-list" href="" data-toggle="modal" data-target="#expense-modal"> <i class="fa fa-plus"></i> Add New Record</a>
                            </div>
                            <div class="col-md-8">
                                @include('includes.successmessages')
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($expenses as $expense)
                                    <tr>
                                        <td>{{ $expense->staff->name }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->description }}</td>
                                        <td> <button class="btn btn-success  btn-sm"
                                                     data-myid="{{$expense->id}}"
                                                     data-myname="{{$expense->staff->id}}"
                                                     data-myamount="{{$expense->amount}}"
                                                     data-mydate="{{$expense->date}}"
                                                     data-mydescription="{{$expense->description}}"
                                                     style="color: white"  data-toggle="modal" data-target="#edit-modal">Edit <i class="zmdi zmdi-edit" style="color: white"></i></button></td>

                                        <td>
                                            <form action="{{route('expenses.destroy',$expense->id)}}" method="post">
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
        <!-- #END# Basic Examples -->

    </div>
</section>

<div class="modal fade " id="expense-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Add New Expense</h3>
            </div>
            <div class="modal-body">
                <form  action="{{route('expenses.store')}}"  method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                     @include('includes.expense_form')
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade " id="edit-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Edit Record</h3>
            </div>
            <div class="modal-body">
                <form  action="{{route('expenses.update','id')}}"  method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="expense_id" value="">
                    @include('includes.expense_form')
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datatable/buttons/buttons.print.min.js')}}"></script>

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script><!-- Custom Js -->
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>


<script>
    $("#edit-modal").on('show.bs.modal',function (event) {

        var button = $(event.relatedTarget);
        var id = button.data('myid');
        var name = button.data('myname');
        var amount = button.data('myamount');
        var date = button.data('mydate');
        var description = button.data('mydescription');

        var modal = $(this)
        modal.find('.modal-body #expense_id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #amount').val(amount);
        modal.find('.modal-body #date').val(date);
        modal.find('.modal-body #description').val(description);

    })
</script>







</body>

</html>
