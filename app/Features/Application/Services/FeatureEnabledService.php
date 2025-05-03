<?php

namespace App\Features\Application\Services;

use App\Features\Infrastructure\Models\Feature;

class FeatureEnabledService
{
    public function isFeatureEnabled(string $feature): bool
    {
        $feature = Feature::query()->where('name', $feature)->first();

        if ($feature === null) {
            // requested feature doesn't exist
            return false;
        }

        return $feature->enabled;
    }
}
