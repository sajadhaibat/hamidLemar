<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/alpino/main/normal-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Oct 2019 07:20:43 GMT -->
<head>
    <title>Items</title>
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
            <div class="row clearfix">
            </div>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Items List</strong> <small>Basic example without any additional modification classes</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                    <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary btn-list" href="" data-toggle="modal" data-target="#item-modal"> <i class="fa fa-plus"></i> Add Item</a>
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
                                        <th>Part Number</th>
                                        <th>Item Location</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                    <tr data-id="1" style="cursor: pointer;">
                                        <td data-field="name">1</td>
                                        <td data-field="name">{{ $item->name }}</td>
                                        <td data-field="name">{{ $item->part_number }}</td>
                                        <td data-field="name">{{ $item->item_location }}</td>
                                        <td data-field="name">{{ $item->description }}</td>
                                        <td>
                                            <button class="btn btn-success  btn-sm"
                                                     data-myid="{{$item->id}}"
                                                     data-myname="{{$item->name}}"
                                                     data-mypartno="{{$item->part_number}}"
                                                     data-mylocation="{{$item->item_location}}"
                                                     data-mydescription="{{$item->description}}"
                                                     style="color: white"  data-toggle="modal" data-target="#edit-item-modal">Edit <i class="zmdi zmdi-edit" style="color: white"></i></button></td>
                                        <td>
                                            <form action="{{route('items.destroy',$item->id)}}" method="post">
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
<div class="modal fade " id="item-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Add New Item</h3>
            </div>
            <div class="modal-body">
                <form action="{{route('items.store')}}" enctype="multipart/form-data" method="post" id="labratory_form">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
                      @include('includes.item_form')

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade " id="edit-item-modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title">Edit Item</h3>
            </div>
            <div class="modal-body">
                <form action="{{route('items.update','id')}}" enctype="multipart/form-data" method="post" >
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="id" id="item_id" value="">
                    @include('includes.item_form')

                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- Jquery Core Js -->
@include('includes.scripts')

<script>
    $("#edit-item-modal").on('show.bs.modal',function (event) {

        var button = $(event.relatedTarget);
        var id = button.data('myid');
        var item_name = button.data('myname');
        var part_number = button.data('mypartno');
        var item_location = button.data('mylocation');
        var item_description = button.data('mydescription');

        var modal = $(this)
        modal.find('.modal-body #item_id').val(id);
        modal.find('.modal-body #item_name').val(item_name);
        modal.find('.modal-body #part_number').val(part_number);
        modal.find('.modal-body #item_location').val(item_location);
        modal.find('.modal-body #item_description').val(item_description);
    })
</script>



</body>

</html>
