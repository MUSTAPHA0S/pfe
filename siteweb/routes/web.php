<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdmineController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth','role:user'])->group(function () {

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
    Route::get('/appointments', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/new', [App\Http\Controllers\AppointmentController::class, 'create'])->name('appointments.create');
    Route::post('/appointments', [App\Http\Controllers\AppointmentController::class, 'store'])->name('appointments.store');
    Route::put('/appointments/{id}', [App\Http\Controllers\AppointmentController::class, 'update'])->name('appointments.update');
    Route::delete('/appointments/{id}', [App\Http\Controllers\AppointmentController::class, 'delete'])->name('appointments.delete');

    Route::get('/quiz', function () {
        return view('quiz');
    });

    Route::get('/profile', function () {
        return view('home', ['user' => Auth::user()]);
    }); 
    
});



Route::middleware(['auth','role:admin'])->group(function () {
    Route::resource('admine', AdmineController::class);
    Route::put('admine', [App\Http\Controllers\AdmineController::class, 'update'])->name('admine.update');
});