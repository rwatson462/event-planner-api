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
                ],
                'date' => [
                    'label' => 'When is your event?',
                    'type' => 'date',
                    'required' => true,
                ],
                'startAt' => [
                    'label' => 'What time does it start?',
                    'type' => 'time',
                ],
                'endAt' => [
                    'label' => 'When does it end?',
                    'type' => 'time',
                ],
            ],
        ];
    @endphp

    <x-ui.form.form :form="$form"/>
</x-layout.app>
