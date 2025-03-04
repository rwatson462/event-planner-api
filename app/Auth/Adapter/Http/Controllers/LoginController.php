<?php

namespace App\Auth\Adapter\Http\Controllers;

use App\Auth\Adapter\Http\RequestData\LoginRequestData;
use App\Features\Services\FeatureEnabledService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class LoginController
{
    public function __construct(
        private FeatureEnabledService $featureEnabledService,
    ) {}

    public function __invoke(LoginRequestData $requestData): RedirectResponse
    {
        $credentials = [
            ...$requestData->toArray(),
            'active' => true,
        ];

        if (! Auth::attempt($credentials)) {
            return redirect()->back()->withInput()->withErrors([
                'password' => 'Invalid username/password combination.',
            ]);
        }

        if ($this->featureEnabledService->isFeatureEnabled('profile')) {
            return redirect()->route('profile');
        } else {
            return redirect()->route('welcome');
        }
    }
}
