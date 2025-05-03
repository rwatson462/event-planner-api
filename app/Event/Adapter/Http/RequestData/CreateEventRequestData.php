<?php

namespace App\Event\Adapter\Http\RequestData;

use App\Event\Adapter\Http\Requests\CreateEventRequest;
use Carbon\CarbonImmutable;

final readonly class CreateEventRequestData
{
    public string $name;
    public string $description;
    public CarbonImmutable $datetime;
    public string $startAt;
    public string $endAt;
    public int $userId;

    public function __construct(
        CreateEventRequest $request,
    ) {
        $this->name = $request->validated('name');
        $this->description = $request->validated('description');
        $this->datetime = CarbonImmutable::parse($request->validated('date'));
        $this->startAt = $request->validated('startAt');
        $this->endAt = $request->validated('endAt');
        $this->userId = $request->user()->id;
    }
}
