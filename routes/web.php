<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::resource('customers', 'CustomersController');
Route::resource('items', 'ItemsController');
Route::resource('stock', 'StockController');
Route::resource('staff', 'StaffController');
Route::resource('expenses', 'DailyExpenseController');
Route::resource('recevied_orders', 'ReceviedOrderController');

Route::get('show_stock/{item_id}','MainController@show_stock')->name('show_stock');
