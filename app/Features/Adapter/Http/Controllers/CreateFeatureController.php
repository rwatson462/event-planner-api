<?php

declare(strict_types=1);

namespace App\Features\Adapter\Http\Controllers;

use App\Features\Infrastructure\Models\Feature;
use Illuminate\Http\Request;

class CreateFeatureController
{
    public function __invoke(Request $request)
    {
        $featureData = $request->validate([
            'name' => 'required|string'
        ]);

        Feature::query()->create($featureData);

        return redirect()->to('features');
    }
}

