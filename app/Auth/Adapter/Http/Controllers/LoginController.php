<?php

namespace App\Auth\Adapter\Http\Controllers;

use App\Features\Services\FeatureEnabledService;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final readonly class LoginController
{
    public function __construct(
        private FeatureEnabledService $featureEnabledService,
    ) {
    }

    public function __invoke(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            if ($this->featureEnabledService->isFeatureEnabled('profile')) {
                return redirect()->route('profile');
            } else {
                return redirect()->route('welcome');
            }
        }

        return redirect()->back()->withInput()->withErrors([
            'password' => 'Invalid username/password combination'
        ]);
    }
}
