<?php

use App\Auth\Adapter\Http\Controllers\LoginController;
use App\Auth\Adapter\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'login')->name('login');
Route::post('/login', LoginController::class);

Route::view('/sign-up', 'sign-up')->name('sign-up');
Route::post('/sign-up', SignUpController::class)->name('sign-up');

Route::middleware('auth')->group(function () {
    Route::any('/logout', function () {
        Auth::logout();
        session()->flush();
        return redirect()->route('welcome');
    })->name('logout');

    Route::view('/profile', 'profile')->name('profile');
});
