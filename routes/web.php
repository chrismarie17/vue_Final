<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('flights', FlightController::class);
Route::resource('bookings', BookingController::class);
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('test-view', function() {
    return view('users.show');
});
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('test-edit-view', function() {
    return view('users.edit');
});
