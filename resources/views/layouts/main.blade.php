<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="tallstackui_darkTheme()" 
    x-bind:class="{ 'dark bg-sky-980': darkTheme, 'bg-sky-100': !darkTheme }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- TallStackUi -->
        <tallstackui:script />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- LiveWire -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="bg-gray-100 dark:bg-blue-200">
            @yield('content')
        </div>

        <!-- LiveWire -->
        @livewireScripts
        @stack('scripts')
    </body>
</html>