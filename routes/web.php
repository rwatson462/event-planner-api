<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::get('/login', function () {
    return 'Log in';
})->name('login');

Route::view('/sign-up', 'sign-up')->name('sign-up');
