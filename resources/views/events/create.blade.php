<x-layout.app>
    <x-ui.page-title title="Set up a new event"/>

    @php
        $form = [
            'submitText' => 'Create',
            'fields' => [
                'name' => [
                    'label' => 'Event name',
                    'required' => true,
                ],
                'description' => [
                    'label' => 'Describe your event',
                    'type' => 'textarea',
                    'required' => true,
                ],
            ],
        ];
    @endphp

    <x-ui.form.form :form="$form"/>
</x-layout.app>
