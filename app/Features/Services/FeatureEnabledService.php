<?php

namespace App\Features\Services;

class FeatureEnabledService
{
    public function isFeatureEnabled(string $feature): bool
    {
        return config("features.$feature.enabled", false);
    }
}
