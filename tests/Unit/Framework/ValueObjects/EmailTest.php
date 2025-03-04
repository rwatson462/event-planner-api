<?php

use App\Framework\ValueObjects\Email;

it('can be created from valid email address', function () {
    $email = new Email('user@example.com');

    expect($email)->toBeInstanceOf(Email::class);
});

it('cannot be created from invalid email address', function () {
    expect(fn () => new Email('invalid-email'))->toThrow(InvalidArgumentException::class);
});
