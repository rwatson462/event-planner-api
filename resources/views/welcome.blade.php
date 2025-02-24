<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event Planner</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-100 dark:bg-slate-900 text-slate-900 dark:text-slate-100 p-6 flex min-h-screen flex-col max-w-4xl mx-auto gap-y-8">
        <header class="p-4 rounded border border-slate-900 dark:border-slate-400">
           <h4 class="text-lg font-black">Event Planner</h4>
        </header>
        <main class="flex-grow">
            <h1 class="text-4xl font-black">Event Planner</h1>
            <p>Plan your events with this demo hosted in Laravel Cloud!</p>
        </main>

        <footer class="rounded border border-slate-900 dark:border-slate-400 p-4">
            <p class="text-sm font-light">&copy; 2025 Rob Watson, Source Pot</p>
        </footer>
    </body>
</html>
