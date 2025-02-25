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
<body class="bg-slate-100  text-slate-700 px-6 flex min-h-screen flex-col max-w-5xl mx-auto gap-y-8">
<x-layout.header/>

<div class="flex-grow">
    <main class="space-y-4 max-w-4xl mx-auto">
        {{ $slot }}
    </main>
</div>

<x-layout.footer/>
</body>
</html>
