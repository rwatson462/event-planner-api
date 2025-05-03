<?php

namespace App\Event\Application\Actions;

use App\Event\Infrastructure\Repositories\EventRepository;
use Carbon\CarbonImmutable;

class CreateEvent
{
    public function __construct(
        private readonly EventRepository $eventRepository,
    ) {}

    public function handle(
        string $name,
        string $description,
        CarbonImmutable $date,
        string $startAt,
        string $endAt,
    ): void {
        $this->eventRepository->store([
            'name' => $name,
            'description' => $description,
            'date' => $date->toDateString(),
            'start_at' => $startAt,
            'end_at' => $endAt,
        ]);

        // todo domain event
    }
}
