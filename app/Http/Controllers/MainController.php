<?php

namespace App\Http\Controllers;

use App\Item;
use App\Stock;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function show_stock($item_id)
    {
        $item = Item::findOrFail($item_id);
        $stocks = Stock::where('item_id',$item_id)->latest()->get();
        return view('stock.show_stock',compact('stocks','item'));
    }
}
