@php
    $featureService = app()->make(\App\Features\Services\FeatureEnabledService::class);

    $loginEnabled = $featureService->isFeatureEnabled('login');
    $signUpEnabled = $featureService->isFeatureEnabled('sign-up');
@endphp
<header class="p-4 rounded border border-slate-900 dark:border-slate-400 flex justify-between items-center">
    <h4 class="text-lg font-black">Event Planner</h4>
    <ul>
        @guest
            @if($loginEnabled)
                <li><a href="{{ route('login') }}">Log in</a></li>
            @endif
            @if($signUpEnabled)
                <li><a href="{{ route('sign-up') }}">Sign up</a></li>
            @endif
        @endguest
    </ul>
</header>
