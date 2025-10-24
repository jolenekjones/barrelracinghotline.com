<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorseController;
use App\Http\Controllers\ProfileBarrelRacingController;
use App\Htpp\Controllers\SSOController;
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

/** Auth routs */
Route::middleware(['auth'])->group(function () {
   /***
     *  Post related routes
     */
  Route::any('posts/{post}/delete', [ProfileBarrelRacingController::class, 'deletePosts'])->name('post.delete');
  Route::post('posts/{post}/draft', [ProfileBarrelRacingController::class, 'draftPost'])->name('post.draft');


});

/**
 *
 * Profile
 */
Route::get('/profile/{id}', [ProfileBarrelRacingController::class, 'profile'])->name('profile');


Route::get('horse-details/{id}', [HorseController::class, 'horseDetails'])->name('horse-details');
Route::get('horses', [HorseController::class, 'Horses'])->name('horses');


Route::get('/sso/check', [SSOController::class, 'checkParentAuth'])->name('sso.check');
Route::post('/sso/login', [SSOController::class, 'ssoLogin'])->name('sso.login');
