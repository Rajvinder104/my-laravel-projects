<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::resource('post' , PostController::class);
Route::resource('video' , VideoController::class);
Route::resource('tag' , TagController::class);

Route::get('/get-single-record/{id}', [TagController::class,'get_single_record'])->name('view.getsinglerecord');
