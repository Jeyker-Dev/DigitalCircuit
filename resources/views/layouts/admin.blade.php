@extends('layouts.main')

@section('content')
<div class="bg-sky-100 dark:bg-sky-980 flex">
    <!-- Sidebar -->
    <x-side-bar class="fixed top-0 left-0 h-full" />

    <div class="flex-1 flex flex-col ml-72"> <!-- Adjust margin to account for fixed sidebar width -->
        <!-- Navigation Bar -->
        <header class="w-full sticky top-0 z-10">
            <x-nav-bar-admin />
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            {{ $slot }}
        </main>
    </div>
</div>
@endsection