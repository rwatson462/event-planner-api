<header class="p-4 rounded-lg rounded-tl-none rounded-tr-none border-t-0 shadow border border-slate-300  flex justify-between items-center">
    <x-ui.header-link href="{{ route('welcome') }}"><h4 class="text-lg font-black">Event Planner</h4></x-ui.header-link>
    <ul class="flex gap-x-4 items-center">
        @auth
            @feature('profile')
                <li><x-ui.header-link href="{{ route('profile') }}">About you</x-ui.header-link></li>
            @endfeature
            @feature('login')
                <li><x-ui.header-link href="{{ route('logout') }}">Log out</x-ui.header-link></li>
            @endfeature
        @endauth
        @guest
            @feature('login')
                <li><x-ui.header-link href="{{ route('login') }}">Log in</x-ui.header-link></li>
            @endfeature
            @feature('sign-up')
                <li><x-ui.header-link href="{{ route('sign-up') }}">Sign up</x-ui.header-link></li>
            @endfeature
        @endguest
    </ul>
</header>
