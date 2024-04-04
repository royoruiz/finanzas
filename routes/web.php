<?php

use App\Http\Controllers\GoogleLoginController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

/*
 
Route::get('/google/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google/callback', function () {
    $user = Socialite::driver('google')->user();
 
    // $user->token
});
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/bankmoves', function () {
        return view('bankmoves');
    })->name('bankmoves');
});


// GoogleLoginController redirect and callback urls
Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
