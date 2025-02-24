<x-layout.app>
    <x-ui.page-title title="Sign up to sell tickets to your events"/>

    <form method="post" class="space-y-4 max-w-md p-4 border rounded-lg">
        @csrf
        <x-ui.form.fieldset
            label="Your name"
            property="name"
            type="text"
            placeholder="John Doe"
        />
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
            <x-ui.button type="submit">Create account</x-ui.button>
        </p>
    </form>
</x-layout.app>
