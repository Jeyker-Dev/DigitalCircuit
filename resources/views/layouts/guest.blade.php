@extends('layouts.main')

@section('content')
<div class="flex flex-col items-center min-h-screen pt-6 sm:justify-center sm:pt-0 bg-sky-50 dark:bg-sky-980">
    <div>
        <a href="/">
            <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
        </a>
    </div>

    <div class="w-10/12 px-6 py-4 mt-6 overflow-hidden shadow-md sm:max-w-md bg-sky-500 dark:bg-sky-900 sm:rounded-lg bg-opacity-10 backdrop-filter backdrop-blur-lg">
        {{ $slot }}
    </div>
</div>
@endsection