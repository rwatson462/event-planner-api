@php
    $featureService = app()->make(\App\Features\Services\FeatureEnabledService::class);
@endphp
<x-layout.app>
    <x-ui.page-title title="Welcome, {{ auth()->user()->name }}"/>

    <p>Here's what we know about you...</p>
    <section class="p-4 border border-slate-300 rounded-lg space-y-2">
        <p>Name: <strong>{{ auth()->user()->name }}</strong></p>
        <p>Email address: <strong>{{ auth()->user()->email }}</strong></p>
        <p>Password: <strong>••••••••</strong></p>
    </section>

    @if($featureService->isFeatureEnabled('events'))
        <h4 class="text-lg font-bold">Your events</h4>
        <section class="p-4 border border-slate-300 rounded-lg space-y-2">
            <p>No events yet, create your first!</p>
            <p><x-ui.link href="{{ route('events.create') }}">Create a new event</x-ui.link></p>
        </section>
    @endif
</x-layout.app>
