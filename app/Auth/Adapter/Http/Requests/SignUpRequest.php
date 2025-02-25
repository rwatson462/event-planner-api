<?php

namespace App\Auth\Adapter\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'unique:users,email'],
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }
}
