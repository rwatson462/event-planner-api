<?php

namespace App\Auth\Adapter\Http\Controllers;

use App\Auth\Adapter\Http\Requests\LoginRequest;
use App\Features\Services\FeatureEnabledService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class LoginController
{
    public function __construct(
        private FeatureEnabledService $featureEnabledService,
    ) {}

    public function __invoke(LoginRequest $request): RedirectResponse
    {
        $credentials = [
            ...$request->validated(),
            'active' => true,
        ];

        if (Auth::attempt($credentials)) {
            if ($this->featureEnabledService->isFeatureEnabled('profile')) {
                return redirect()->route('profile');
            } else {
                return redirect()->route('welcome');
            }
        }

        return redirect()->back()->withInput()->withErrors([
            'password' => 'Invalid username/password combination',
        ]);
    }
}
