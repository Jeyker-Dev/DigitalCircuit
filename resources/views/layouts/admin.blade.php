<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Admin Panel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- LiveWire -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-sky-100 dark:bg-sky-980 flex">
            <!-- Sidebar -->
            <x-side-bar />

            <div class="flex-1 flex flex-col">
                <!-- Navigation Bar -->
                <header class="w-full overflow-x-hidden">
                    <x-nav-bar-admin />
                </header>

                <!-- Main Content -->
                <main class="flex-1 p-6">
                    {{ $slot }}
                </main>
            </div>
        </div>

        <!-- LiveWire -->
        @livewireScripts
        @stack('scripts')
        <!-- Incluye Alpine.js en tu archivo de layout principal -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    </body>
</html>