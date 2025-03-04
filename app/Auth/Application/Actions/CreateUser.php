<?php

namespace App\Auth\Application\Actions;

use App\Auth\Infrastructure\Repositories\UserRepository;
use App\Framework\ValueObjects\Email;

class CreateUser
{
    public function __construct(
        private readonly UserRepository $userRepository,
    ) {}

    public function handle(
        string $name,
        Email $email,
        string $password,
    ): void {
        $this->userRepository->store([
            'name' => $name,
            'email' => $email->value,
            'password' => $password,
        ]);
    }
}
