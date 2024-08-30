<?php

use App\Http\Controllers\ResController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(Usercontroller::class)->group(function () {
    Route::get('/', 'get_records')->name('home');

    Route::get('/get-single-record/{id}', 'get_single_record')->name('view.getsinglerecord');

    Route::post('/adddata',  'add')->name('addUser');
    Route::get('/insertdata',  'insert');

    Route::post('/update/{id}',  'updateuser')->name('update.User');
    Route::get('/updatepage/{id}', 'updatepage')->name('update.page');

    Route::get('/delete/{id}', 'deleteuser')->name('view.delete');
    Route::view('newuser', 'addusers');

    Route::get('joindata', 'Showstudents');
    Route::get('unionall-data', 'uniondata');
    Route::get('when', 'whendata');
    Route::get('index', 'index');
    Route::view('valid', 'validations');
    Route::post('/validate', 'validation')->name('addwithvalidation');

});



Route::get('Testing',[TestController::class,'get_records']);


Route::resource('users', ResController::class);
// Route::resource('users', ResController::class)->names(
//     [
//         'show' => 'view',
//         'update' => 'edit',
//         'destroy' => 'delete'
//     ]
// );

// Route::resource('users',ResController::class)->except([
//     'show'
// ]);

// Route::resource('users',ResController::class)->only([
//     'show','update','create'
// ]);
