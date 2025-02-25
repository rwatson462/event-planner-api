<x-layout.app>
    <x-ui.page-title title="Welcome, {{ auth()->user()->name }}"/>

    <p>Here's what we know about you...</p>
    <section class="p-4 border border-slate-300 rounded-lg space-y-2">
        <p>Your name: <strong>{{ auth()->user()->name }}</strong></p>
        <p>Your email address: <strong>{{ auth()->user()->email }}</strong></p>
        <p>Your password: <strong>••••••••</strong></p>
    </section>
</x-layout.app>
