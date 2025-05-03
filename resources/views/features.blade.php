<x-layout.app>
    <x-ui.page-title title="Features"/>

    <p>Features configured for this app. New features are disabled by default.</p>
    <section class="p-4 border border-slate-300 rounded-lg space-y-2">
        <ul class="space-y-2">
            @foreach(App\Features\Infrastructure\Models\Feature::all() as $feature)
                <li class="grid grid-cols-3 items-center">
                    <span>{{ $feature->name }}</span>
                    <span>{{ $feature->enabled ? 'enabled' : '' }}</span>
                    <form method="post"
                          class="text-right"
                          action="{{ route($feature->enabled ? 'feature.disable' : 'feature.enable', ['featureName' => $feature->name]) }}">
                        @csrf
                        <x-ui.button type="submit"
                        >{{ $feature->enabled ? 'disable' : 'enable' }}</x-ui.button>
                    </form>
                </li>
            @endforeach
        </ul>
    </section>

    @php
        $form = [
            'submitText' => 'Create feature',
            'fields' => [
                'name' => [
                    'label' => 'Feature name',
                    'type' => 'text',
                    'placeholder' => 'my-cool-feature',
                ],
            ]
        ];
    @endphp

    <x-ui.form.form :form="$form"/>
</x-layout.app>
