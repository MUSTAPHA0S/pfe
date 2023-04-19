<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pourquoi', function () {
    return view('pourquoi');
});

Route::get('/quipeutdonner', function () {
    return view('quipeut');
});

Route::get('/oudonner', function () {
    return view('ou');
});



Route::get('/important', function () {
    return view('important');
});

Route::get('/appointments', function () {
    return view('appointments');
});


Route::get('/appointments', 'App\Http\Controllers\AppointmentController@index')->name('appointments.index');
Route::get('/appointments/create', 'AppointmentController@create')->name('appointments.create');
Route::post('/appointments', 'AppointmentController@store')->name('appointments.store');




Route::get('/User/{id}', [UserController::class, 'show']);


