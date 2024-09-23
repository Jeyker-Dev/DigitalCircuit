@extends('layouts.main')

@section('content')
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-sky-50 dark:bg-sky-980">
    <div>
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </div>

    <div class="w-10/12 sm:max-w-md mt-6 px-6 py-4 bg-sky-100 dark:bg-sky-900 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
@endsection