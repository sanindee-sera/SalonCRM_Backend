<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', HomeController::class)->name('home');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Reservation route
    Route::get('/reservation', function () {
        return view('dashboard'); // Make sure this refers to the right view for reservation
    })->name('reservation');

    // Categories resource routes
    Route::resource('categories', CategoryController::class);

    // Appointments resource routes
    Route::resource('appointments', AppointmentsController::class);
});

// Jetstream specific auth middleware routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Events route for FullCalendar

Route::get('/admin/appointments', function () {
    return view('layouts.admin');  // Pointing to 'resources/views/layouts/admin.blade.php'
})->name('admin.appointments');

// routes/web.php
Route::get('/appointments/events', [App\Http\Controllers\AppointmentsController::class, 'getAppointments'])->name('appointments.events');




