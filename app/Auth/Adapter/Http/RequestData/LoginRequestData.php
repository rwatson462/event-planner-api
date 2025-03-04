<?php

namespace App\Auth\Adapter\Http\RequestData;

use App\Auth\Adapter\Http\Requests\LoginRequest;
use App\Framework\ValueObjects\Email;

final readonly class LoginRequestData
{
    public Email $email;

    public string $password;

    public function __construct(LoginRequest $request)
    {
        $this->email = new Email($request->validated('email'));
        $this->password = $request->validated('password');
    }

    public function toArray(): array
    {
        return [
            'email' => $this->email->value,
            'password' => $this->password,
        ];
    }
}
