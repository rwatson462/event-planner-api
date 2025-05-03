<?php

namespace App\Event\Infrastructure\Repositories;

use App\Event\Infrastructure\Models\Event;

class EventRepository
{
    public function store(array $data): void
    {
        Event::query()->create($data);
    }
}
