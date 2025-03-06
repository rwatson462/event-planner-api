<x-layout.app>
    <x-ui.page-title title="Sign up to organise your events"/>

    @php
        $form = [
            'submitText' => 'Create account',
            'fields' => [
                'name' => [
                    'label' => 'Your name',
                    'placeholder' => 'John Doe',
                ],
                'email' => [
                    'label' => 'Email address',
                    'type' => 'email',
                    'placeholder' => 'user@example.com',
                ],
                'password' => [
                    'label' => 'Password',
                    'type' => 'password',
                ],
            ]
        ];
    @endphp

    <x-ui.form.form :form="$form" />
</x-layout.app>
