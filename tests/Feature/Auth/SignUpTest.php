<?php

use App\Auth\Infrastructure\Models\User;

use function Pest\Laravel\post;

it('can sign up', function () {
    post(route('sign-up'), [
        'name' => 'John Doe',
        'email' => 'john@doe.com',
        'password' => 'password',
    ])
        ->assertRedirect(route('welcome'));

    $user = User::query()->where('email', 'john@doe.com')->first();
    expect($user)->not->toBeNull()
        ->and($user->active)->toBeTrue();
});
