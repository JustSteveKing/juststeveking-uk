@props([
    'title' => config('site.title'),
    'description' => config('site.description'),
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50 dark:bg-slate-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <meta name="description" content="{{ $description }}" />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css','resources/js/app.js'])
    <livewire:styles />
</head>
<body class="h-full text-slate-900 dark:text-slate-50">
    <x-ui.header />

    <main id="main_content" aria-labelledby="main website content">
        {{ $slot }}
    </main>

    <x-ui.footer />

    <livewire:scripts />

    @stack('scripts')
</body>
</html>
