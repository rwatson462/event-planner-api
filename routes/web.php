<?php

use App\Auth\Adapter\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::get('/login', function () {
    return 'Log in';
})->name('login');

Route::view('/sign-up', 'sign-up')->name('sign-up');
Route::post('/sign-up', SignUpController::class)->name('sign-up');
