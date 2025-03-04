<?php

namespace App\Auth\Adapter\Http\Controllers;

use App\Auth\Adapter\Http\RequestData\SignUpRequestData;
use App\Auth\Application\Actions\CreateUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

final readonly class SignUpController
{
    public function __construct(
        private CreateUser $createUser,
    ) {}

    public function __invoke(SignUpRequestData $requestData): RedirectResponse
    {
        $this->createUser->handle(
            name: $requestData->name,
            email: $requestData->email,
            password: $requestData->password,
        );

        Auth::attempt($requestData->toArray());

        return redirect()->route('welcome');
    }
}
