

    <div class="row clearfix"></div>

         <div class="col-ms-12 col-md-12">
            <div class="form-group">
            <label for="item">Select Items</label>
            <select class="form-control z-index show-tick" data-live-search="true" name="item">
                <option value="" disabled selected>Select Item</option>
                @foreach($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
            </div>



    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" name="quantity" placeholder="quantity" required id="quantity"/>
    </div>
    <div class="form-group">
        <label for="">Buy Amount</label>
        <input type="number" class="form-control" name="buy_amount" placeholder="Buy Amount" required/>
    </div>
    <div class="form-group">
        <label for="">Sale Amount</label>
        <input type="number"  class="form-control" name="sale_amount" placeholder="Sale Amount" required/>
    </div>

    <div class="form-group">
        <label for="">Date</label>
        <input type="date"  class="form-control" name="date" required/>
    </div>
    <div class="form-group">
        <label for="">Details</label>
        <textarea  class="form-control" name="details" placeholder="Description" required ></textarea>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
 </div>
