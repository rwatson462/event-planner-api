<x-layout.app>
    <x-ui.page-title title="Sign up to sell tickets to your events"/>

    <form method="post" class="space-y-4 max-w-md p-4 border rounded-lg">
        <x-ui.form.fieldset>
            <x-ui.form.label for="email" class="w-1/2 text-right">Email address</x-ui.form.label>
            <x-ui.form.input type="email" name="email" id="email" placeholder="user@example.com"/>
        </x-ui.form.fieldset>
        <x-ui.form.fieldset>
            <x-ui.form.label for="password">Password</x-ui.form.label>
            <x-ui.form.input type="password" name="password" id="password"/>
        </x-ui.form.fieldset>
        <p class="text-right">
            <x-ui.button type="submit">Create account</x-ui.button>
        </p>
    </form>
</x-layout.app>
