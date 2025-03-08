<?php

namespace App\Event\Adapter\Http\Controllers;

use Illuminate\Http\Request;

class EventCreateController
{
    public function __invoke(Request $request): never
    {
        dd($request->all());
    }
}
