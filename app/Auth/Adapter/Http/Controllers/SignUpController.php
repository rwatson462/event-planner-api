<?php

namespace App\Auth\Adapter\Http\Controllers;

use App\Auth\Adapter\Http\Requests\SignUpRequest;
use App\Auth\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class SignUpController
{
    public function __invoke(SignUpRequest $request): RedirectResponse
    {
        $user = User::query()->create($request->validated());

        Auth::login($user);

        return redirect()->route('welcome');
    }
}
