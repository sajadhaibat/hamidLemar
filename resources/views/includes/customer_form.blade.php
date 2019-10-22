<form  action="{{route('customers.store')}}"  method="post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
    <div class="row clearfix">

        <div class="col-sm-12">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="User or Company name" required id="name"/>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Address" required id="address"/>
            </div>
            <div class="form-group">
                <label for="">Phone Number</label>
                <input type="number" class="form-control" name="phone" placeholder="Phone Number" required id="phone"/>
            </div>
            <div class="form-group">
                <label for="">Point of Contact</label>
                <input type="text"  class="form-control" name="poc" placeholder="Point of Contact" required id="poc"/>
            </div>
            <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
        </div>
    </div>
</form>
