<?php

namespace App\Http\Controllers;

use App\DailyExpense;
use App\Staff;
use Illuminate\Http\Request;

class DailyExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        $expenses = DailyExpense::all();
        return view('expenses.expenses', compact('expenses', 'staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = new DailyExpense();
        $expense->staff_id = $request->staff_id;
        $expense->amount = $request->amount;
        $expense->date = $request->date;
        $expense->description = $request->description;
        $expense->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DailyExpense  $dailyExpense
     * @return \Illuminate\Http\Response
     */
    public function show(DailyExpense $dailyExpense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DailyExpense  $dailyExpense
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyExpense $dailyExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DailyExpense  $dailyExpense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyExpense $dailyExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DailyExpense  $dailyExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyExpense $dailyExpense)
    {
        //
    }
}
