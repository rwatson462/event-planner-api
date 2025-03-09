<?php

namespace App\Event\Infrastructure\Repositories;

class EventRepository
{
    public function store(array $data): void
    {
        Event::query()->create($data);
    }
}
