<?php

namespace App\Event\Adapter\Http\Controllers;

use App\Event\Adapter\Http\RequestData\CreateEventRequestData;
use App\Event\Application\Actions\CreateEvent;
use Illuminate\Http\RedirectResponse;

final readonly class CreateEventController
{
    public function __construct(
        private CreateEvent $createEvent,
    ) {}

    public function __invoke(CreateEventRequestData $requestData): RedirectResponse
    {
        $this->createEvent->handle(
            name: $requestData->name,
            description: $requestData->description,
            date: $requestData->datetime,
            startAt: $requestData->startAt,
            endAt: $requestData->endAt,
        );
    }
}
