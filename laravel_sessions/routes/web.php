<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index']);
Route::get('/store-session', [TestController::class, 'storesession']);
Route::get('/delete-session', [TestController::class, 'deletesession']);

// Route::get('store_session', function () {

// });
