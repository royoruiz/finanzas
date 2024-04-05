<?php

use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\AccountsController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});



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
    Route::get('/admin/category', [CategorysController::class, 'index'])
    ->name('admin.category');
    Route::get('/admin/accounts', [AccountsController::class, 'index'])
    ->name('admin.accounts');
});


// GoogleLoginController redirect and callback urls
Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
