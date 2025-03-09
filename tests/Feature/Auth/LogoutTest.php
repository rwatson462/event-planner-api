<?php

use App\Auth\Infrastructure\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\post;

it('can log out', function () {
    actingAs(User::factory()->create())
        ->post(route('logout'))
        ->assertRedirect(route('welcome'));
});

it('cannot log out if not logged in', function () {
    post(route('logout'))
        ->assertRedirect(route('login'));
});
