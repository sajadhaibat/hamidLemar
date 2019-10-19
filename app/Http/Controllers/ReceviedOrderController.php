<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Item;
use App\ReceviedOrder;
use Illuminate\Http\Request;

class ReceviedOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $orders = ReceviedOrder::all();
      return view('invoices.invoices', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $items = Item::all();
        return view('invoices.new_order', compact('customers', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $order = new ReceviedOrder();
//        if($request->hasfile('item_id')) {
//            foreach ($request->file('item_id') as $item) {
//                $items[] = $item;
//            }
//        }
//        if($request->hasfile('quantity')) {
//            foreach ($request->file('quantity') as $quantity) {
//                $quantity[] = $quantity;
//            }
//        }
        $order->customer_id = $request->customer_id;
        $order->order_number = $request->order_number;
        $order->order_date = $request->date;
        $order->items=json_encode($request->item_id);
        $order->quantity=json_encode($request->quantity);
        $order->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReceviedOrder  $receviedOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ReceviedOrder $receviedOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReceviedOrder  $receviedOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ReceviedOrder $receviedOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReceviedOrder  $receviedOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReceviedOrder $receviedOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReceviedOrder  $receviedOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReceviedOrder $receviedOrder)
    {
        //
    }
}
