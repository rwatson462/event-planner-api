<?php

use App\Auth\Infrastructure\Models\User;
use Illuminate\Support\Facades\Hash;

use function Pest\Laravel\post;

it('can log in', function () {
    User::query()->create([
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'password' => Hash::make('password'),
    ]);

    post(route('login'), [
        'email' => 'john@doe.com',
        'password' => 'password',
    ])
        ->assertRedirect(route('profile'));
});

it('cannot log in with incorrect email', function () {
    User::query()->create([
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'password' => Hash::make('password'),
    ]);

    post(route('login'), [
        'email' => 'invalid@email.com',
        'password' => 'password',
    ])->assertSessionHasErrors([
        'email' => 'The selected email is invalid.',
    ]);
});

it('cannot log in with incorrect password', function () {
    User::query()->create([
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'password' => Hash::make('password'),
    ]);

    post(route('login'), [
        'email' => 'john@doe.com',
        'password' => 'invalid-password',
    ])->assertSessionHasErrors([
        'password' => 'Invalid username/password combination.',
    ]);
});
