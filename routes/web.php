<?php

use App\Auth\Adapter\Http\Controllers\LoginController;
use App\Auth\Adapter\Http\Controllers\LogoutController;
use App\Auth\Adapter\Http\Controllers\SignUpController;
use App\Event\Adapter\Http\Controllers\EventCreateController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::view('/login', 'login')->name('login');
Route::post('/login', LoginController::class);

Route::view('/sign-up', 'sign-up')->name('sign-up');
Route::post('/sign-up', SignUpController::class)->name('sign-up');

Route::middleware('auth')->group(function () {
    Route::any('/logout', LogoutController::class)->name('logout');

    Route::view('/profile', 'profile')->name('profile');

    Route::view('/events/create', 'events.create')->name('events.create');
    Route::post('/events/create', EventCreateController::class);
});
