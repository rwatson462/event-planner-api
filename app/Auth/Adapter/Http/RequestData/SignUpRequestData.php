<?php

namespace App\Auth\Adapter\Http\RequestData;

use App\Auth\Adapter\Http\Requests\SignUpRequest;
use App\Framework\ValueObjects\Email;

final readonly class SignUpRequestData
{
    public string $name;

    public Email $email;

    public string $password;

    public function __construct(SignUpRequest $request)
    {
        $this->name = $request->validated('name');
        $this->email = new Email($request->validated('email'));
        $this->password = $request->validated('password');
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email->value,
            'password' => $this->password,
        ];
    }
}
