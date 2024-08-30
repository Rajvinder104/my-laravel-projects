<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('conutry',CountryController::class)->name('index','country');
Route::resource('users',UserController::class)->name('index', 'users');
Route::resource('post',PostController::class);
