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
<body class="bg-slate-100 dark:bg-slate-900 text-slate-700 dark:text-slate-300 px-6 flex min-h-screen flex-col max-w-4xl mx-auto gap-y-8">
<x-layout.header/>

<main class="flex-grow space-y-4">
    {{ $slot }}
</main>

<x-layout.footer/>
</body>
</html>
