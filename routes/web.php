<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/book', [AppointmentController::class, 'create']);
Route::post('/book', [AppointmentController::class, 'store']);
Route::get('/admin', [AppointmentController::class, 'index']);
Route::get('/admin/confirm/{id}', [AppointmentController::class, 'confirm']);


