<div class="row clearfix">

    <div class="col-sm-12">
        <div class="form-group">
            <label>Staff Name</label>
            <select class="form-control" name="staff_id" required id="staff_id">
                <option selected disabled value="">Select the staff
                @foreach($staffs as $staff)
                    <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Amount</label>
            <input type="number" class="form-control" name="amount" placeholder="Buy Amount" required id="amount"/>
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="date"  class="form-control" name="date" required id="date"/>
        </div>
        <div class="form-group">
            <label for="description">Details</label>
            <textarea  class="form-control" name="description" placeholder="Details" required id="description">
            </textarea>
        </div>
        <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Save</button>
    </div>
</div>
