<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorseController;
Route::resource('/', App\Http\Controllers\HorsehotlineController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('horse-details/{id}', [HorseController::class, 'horseDetails'])->name('horse-details');
Route::get('horses', [HorseController::class, 'Horses'])->name('horses');