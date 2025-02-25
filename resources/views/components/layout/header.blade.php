@php
    $featureService = app()->make(\App\Features\Services\FeatureEnabledService::class);
@endphp
<header class="p-4 rounded-full shadow border border-slate-300 dark:border-slate-400 flex justify-between items-center">
    <x-ui.link href="{{ route('welcome') }}"><h4 class="text-lg font-black">Event Planner</h4></x-ui.link>
    <ul class="flex gap-x-4 items-center">
        @auth
            @if($featureService->isFeatureEnabled('profile'))
                <li><x-ui.link href="{{ route('profile') }}">About you</x-ui.link></li>
            @endif
            @if($featureService->isFeatureEnabled('login'))
                <li><x-ui.link href="{{ route('logout') }}">Log out</x-ui.link></li>
            @endif
        @endauth
        @guest
            @if($featureService->isFeatureEnabled('login'))
                <li><x-ui.link href="{{ route('login') }}">Log in</x-ui.link></li>
            @endif
            @if($featureService->isFeatureEnabled('sign-up'))
                <li><x-ui.link href="{{ route('sign-up') }}">Sign up</x-ui.link></li>
            @endif
        @endguest
    </ul>
</header>
