<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Testuser;
use App\Http\Middleware\Validuser;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::view('register', 'register')->name('register');
Route::post('registerSave', [UserController::class, 'register'])->name('registerSave');


Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, "login"])->name('loginMatch');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

// --------------------------------------------------------------------------------------------------------------------------------------------
// Route::get('dashboard', [UserController::class, "dashboardPage"])
//     ->name('dashboard')
//     ->middleware(['IsValiduser:admin', Testuser::class]);

// Route::get('dashboard/inner', [UserController::class, "innerPage"])
//     ->name('inner')
//     ->middleware(['IsValiduser:admin', Testuser::class]);


// ------------------------------------------------------------------------------------------------------------------------------------------------
// ess route vich laravel da inbuilt method hai "auth" jiss vich sanu koi v alag to middleware di file create karan di lodd nhi hundi
Route::get('dashboard', [UserController::class, "dashboardPage"])
    ->name('dashboard')
    ->middleware(['auth', 'IsValiduser:admin',Testuser::class]);

Route::get('dashboard/inner', [UserController::class, "innerPage"])
    ->name('inner')
    ->middleware(['auth', 'IsValiduser:admin',Testuser::class]);



// ---------------------------------------------------------------------------------------------------------------------------------------
// group of middleware
// Route::middleware(['ok-user'])->group(function () {
//     Route::get('dashboard', [UserController::class, "dashboardPage"])->name('dashboard');
//     Route::get('dashboard/inner', [UserController::class, "innerPage"])->name('inner')->withoutMiddleware([Testuser::class]);
// });

// ------------------------------------------------------------------------------------------------------------------------------------------------

// Without middleware
// Route::middleware([Testuser::class])->group(function () {
//     Route::get('dashboard', [UserController::class, "dashboardPage"])->name('dashboard');
//     Route::get('dashboard/inner', [UserController::class, "innerPage"])->name('inner');
// });

// --------------------------------------------------------------------------------------------------------------------------------------------
