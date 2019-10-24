<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Item;
use App\ReceviedOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $keyorder = 0;
        $res = [];
        foreach($orders as  $order) {
          $res[$keyorder]['id'] = $order->id;
          $res[$keyorder]['customer_id'] = $order->customer_id;
          $res[$keyorder]['customer_name']  = DB::table('customers')->where('id', $order->customer_id)->value('name');
          $res[$keyorder]['order_number'] = $order->order_number;
          $res[$keyorder]['order_date'] = $order->order_date;
          $res[$keyorder]['order_date'] = $order->order_date;
          $x = json_decode($order->quantity);
          $y = json_decode($order->items);
        foreach ($x as $key => $value) {
            foreach ($y as $k => $v) {
                if ($key == $k) {
                    $res[$keyorder]['items'][$key]['name'] = $v;
                    $res[$keyorder]['items'][$key]['quantity'] = $value;
                }
            }

        }
          $keyorder++;
      }
      return view('invoices.invoices', compact('res'));
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
        $order->items=json_encode($request->option);
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
