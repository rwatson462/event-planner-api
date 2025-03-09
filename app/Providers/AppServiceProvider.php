<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::directive('feature', function (string $name) {
            return "<?php if (app()->make(\App\Features\Services\FeatureEnabledService::class)->isFeatureEnabled($name)): ?>";
        });

        Blade::directive('endfeature', function () {
            return '<?php endif; ?>';
        });
    }
}
