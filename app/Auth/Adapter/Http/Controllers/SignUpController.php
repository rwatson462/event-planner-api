<?php

namespace App\Auth\Adapter\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final readonly class SignUpController
{
    public function __invoke(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $user = User::query()->create($credentials);

        Auth::login($user);

        return redirect()->route('welcome');
    }
}
