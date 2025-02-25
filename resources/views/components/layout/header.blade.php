@php
    $featureService = app()->make(\App\Features\Services\FeatureEnabledService::class);

    $loginEnabled = $featureService->isFeatureEnabled('login');
    $signUpEnabled = $featureService->isFeatureEnabled('sign-up');
@endphp
<header class="p-4 rounded border border-slate-900 dark:border-slate-400 flex justify-between items-center">
    <x-ui.link href="{{ route('welcome') }}"><h4 class="text-lg font-black">Event Planner</h4></x-ui.link>
    <ul>
        @guest
            @if($loginEnabled)
                <li><x-ui.link href="{{ route('login') }}">Log in</x-ui.link></li>
            @endif
            @if($signUpEnabled)
                <li><x-ui.link href="{{ route('sign-up') }}">Sign up</x-ui.link></li>
            @endif
        @endguest
    </ul>
</header>
