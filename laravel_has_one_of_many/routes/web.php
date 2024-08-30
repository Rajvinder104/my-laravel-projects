<?php

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\orderscontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('customers',customercontroller::class);
Route::resource('orders',orderscontroller::class);
