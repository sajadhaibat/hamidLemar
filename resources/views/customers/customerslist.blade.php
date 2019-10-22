<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/jquery-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:43 GMT -->
<head>
    <title>Customers List</title>
    @include('includes.head')
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>
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
                        <div class="row">
                            <div class="col-md-4">

                        <h2><strong>Customers List</strong><small>See Customers Detail here.</small>  </h2>
                            </div>
                            <div class="col-md-8">

                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-list" href="" data-toggle="modal" data-target="#customer-modal"> <i class="fa fa-plus"></i> Add New Customer</a>
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
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>POC</th>
                                    <th>Total Amount</th>
                                    <th>Received Amount</th>
                                    <th>Loan Amount</th>
                                    <th>See Records </th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->poc }}</td>
                                    <td>{{ $customer->total_fee }}</td>
                                    <td>{{ $customer->received_amount }}</td>
                                    <td>{{ $customer->toal_fee - $customer->received_amount }}</td>
                                    <td><button type="button" class="btn btn-raised btn-info  waves-effect btn-sm">Records <i class="zmdi zmdi-eye" style="color: white"></i></button></td>
                                    <td> <button class="btn btn-success  btn-sm"
                                                 data-myid="{{$customer->id}}"
                                                 data-myname="{{$customer->name}}"
                                                 data-myaddress="{{$customer->address}}"
                                                 data-myphone="{{$customer->phone}}"
                                                 data-mypoc="{{$customer->poc}}"
                                                style="color: white"  data-toggle="modal" data-target="#edit-customer-modal">Edit <i class="zmdi zmdi-edit" style="color: white"></i></button></td>
                                    <td>
                                        <form action="{{route('customers.destroy',$customer->id)}}" method="post">
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
<!-- Add Modal -->
<div class="modal fade " id="customer-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Add New Customer</h3>
            </div>
            <div class="modal-body">
                <form  action="{{route('customers.store')}}"  method="post">
                      {{csrf_field()}}
                    @include('includes.customer_form')
                </form>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- Edit Modal -->
<div class="modal fade " id="edit-customer-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Edit Customer</h3>
            </div>
            <div class="modal-body">
                <form  action="{{route('customers.update','id')}}"  method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="customer_id" value="">
                    @include('includes.customer_form')
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@include('includes.scripts')


    <script>
    $("#edit-customer-modal").on('show.bs.modal',function (event) {

        var button = $(event.relatedTarget);
        var id = button.data('myid');
        var name = button.data('myname');
        var address = button.data('myaddress');
        var phone = button.data('myphone');
        var poc = button.data('mypoc');

        var modal = $(this)
        modal.find('.modal-body #customer_id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #address').val(address);
        modal.find('.modal-body #phone').val(phone);
        modal.find('.modal-body #poc').val(poc);
    })
    </script>


</body>

</html>
