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
                            <div class="col-md-12">
                                <a class="btn btn-primary btn-list" href="" data-toggle="modal" data-target="#item-modal"> <i class="fa fa-plus"></i> Add Item</a>
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
                                            <a class="button button-small edit" title="Edit" style="color: green">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
                                        </td>
                                    <td>

                                            <a class="button button-small edit" title="Delete" style="color:red;">
                                                <i class="zmdi zmdi-edit"></i>
                                            </a>
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

                    <div class="form-group">
                        <label>Item Name</label>
                        <input type="text" class="form-control" name="item_name" placeholder="Enter Item Name" required>
                    </div>
                    <div class="form-group">
                        <label>Part Number</label>
                        <input type="text" class="form-control" name="part_number" placeholder="Enter Item part number" required>
                    </div>
                    <div class="form-group">
                        <label>Item Location</label>
                        <input type="text" class="form-control" name="item_location" placeholder="Enter Item location" required>
                    </div>
                    <div class="form-group" id="total_fee_div">
                        <textarea type="number" class="form-control" name="item_description" placeholder="Enter Item Description"></textarea>
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
@include('includes.scripts')
</body>

</html>
