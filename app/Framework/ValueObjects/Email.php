<?php

namespace App\Framework\ValueObjects;

use InvalidArgumentException;

readonly class Email
{
    public function __construct(public string $value)
    {
        if (! filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email');
        }
    }
}
