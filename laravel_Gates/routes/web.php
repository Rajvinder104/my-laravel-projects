<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('SignIn', 'login')->name('login');
Route::view('SignUp', 'register')->name('registeropen');

Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');
Route::post('registersave', [UserController::class, 'register'])->name('registersave');


//Route::get('dashboard', [UserController::class, "dashboardPage"])->name('dashboard')->middleware('can:isAdmin');
// Route::get('dashboard', [UserController::class, "dashboardPage"])->name('dashboard')->can('isAdmin');
Route::get('dashboard', [UserController::class, "dashboardPage"])->name('dashboard');
Route::get('logout', [UserController::class, "logout"])->name('logout');

Route::get('profilepage/{id}', [UserController::class, "viewprofile"])->name('profileopen');
Route::get('postspage/{id}', [UserController::class, "viewpost"])->name('postsopen');
Route::get('single-post/{id}', [UserController::class, "UpdatePost"])->name('post.update');
