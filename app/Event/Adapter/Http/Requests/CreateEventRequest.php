<?php

namespace App\Event\Adapter\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'date' => ['required', 'date'],
            'startAt' => ['required', 'string'],
            'endAt' => ['required', 'string'],
        ];
    }
}
