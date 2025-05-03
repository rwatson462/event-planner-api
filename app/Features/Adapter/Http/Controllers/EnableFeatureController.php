<?php

declare(strict_types=1);

namespace App\Features\Adapter\Http\Controllers;

use App\Features\Infrastructure\Models\Feature;
use Illuminate\Http\Request;

class EnableFeatureController
{
    public function __invoke(string $featureName)
    {
        $feature = Feature::query()->where('name', $featureName)->firstOrFail();

        $feature->update(['enabled' => true]);

        return redirect()->to('features');
    }
}

