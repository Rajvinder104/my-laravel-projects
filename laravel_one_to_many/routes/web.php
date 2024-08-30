<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user',UserController::class);
Route::resource('post',PostController::class);

//Route::get('viewpost',[UserController::class,'userspost'])->name('viewpost');
 //Route::view('viewpost','viewpost')->name('viewpost');
