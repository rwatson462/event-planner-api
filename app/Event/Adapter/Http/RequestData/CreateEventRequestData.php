<?php

namespace App\Event\Adapter\Http\RequestData;

use App\Event\Adapter\Http\Requests\CreateEventRequest;
use Carbon\CarbonImmutable;

final readonly class CreateEventRequestData
{
    public string $name;

    public string $description;

    public CarbonImmutable $datetime;

    public function __construct(
        CreateEventRequest $request,
    ) {
        $this->name = $request->validated('name');
        $this->description = $request->validated('description');
        $this->datetime = CarbonImmutable::parse($request->validated('datetime'));
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'datetime' => $this->datetime->toDateTimeString(),
        ];
    }
}
