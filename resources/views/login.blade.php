<x-layout.app>
    <x-ui.page-title title="Log in to your account"/>

    <form method="post" class="space-y-4 max-w-md pt-24">
        @csrf
        <x-ui.form.fieldset
            label="Email address"
            property="email"
            type="email"
            placeholder="user@example.com"
        />
        <x-ui.form.fieldset
            label="Password"
            property="password"
            type="password"
        />

        <p class="text-right">
            <x-ui.button type="submit">Log in</x-ui.button>
        </p>
    </form>
</x-layout.app>
