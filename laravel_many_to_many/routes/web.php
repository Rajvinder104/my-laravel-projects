<?php

use App\Http\Controllers\RolesController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('student',studentController::class)->name('index' , 'students');
Route::resource('roles',RolesController::class)->name('index' , 'roles');

