<x-layout.app>
    <x-ui.page-title title="Log in to your account"/>

    @php
        $form = [
            'submitText' => 'Log in',
            'fields' => [
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
