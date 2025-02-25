<?php

namespace App\Auth\Adapter\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class LogoutController
{
    public function __invoke(): RedirectResponse
    {
        Auth::logout();
        session()->flush();

        return redirect()->route('welcome');
    }
}
