<?php

namespace App\Http\Controllers;

use App\Item;
use App\Stock;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::latest()->get();
       $items =  Stock::where('item_id',1)->sum("quantity");
       //dd($items);
        return view('stock.stocklist', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('stock.addtostock', compact('items'));

    }


    public function store(Request $request)
    {
        $stock = new Stock();
        $stock->item_id = $request->item;
        $stock->quantity = $request->quantity;
        $stock->buy_amount = $request->buy_amount;
        $stock->sale_amount = $request->sale_amount;
        $stock->details = $request->details;
        $stock->date = $request->date;
        $stock->save();
        session()->flash('message','New Item Successfully Added');
        return redirect()->back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
