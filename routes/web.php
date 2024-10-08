<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

Route::get('/home', function () {
    return view('home');
});


Route::get('/reservation', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource('categories', CategoryController::class)
    ->middleware(['auth', 'verified']);

Route::resource('appointments', AppointmentsController::class)
    ->middleware(['auth', 'verified']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// routes/web.php

Route::resource('categories', CategoryController::class);
Route::resource('appointments', AppointmentsController::class);
