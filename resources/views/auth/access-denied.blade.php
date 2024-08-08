<x-error-layout>
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-3xl md:text-4xl text-gray-900 dark:text-gray-100 font-open-sans text-center p-4">404 - Page Not Found</h1>
        <p class="text-lg md:text-xl text-gray-900 dark:text-gray-100 font-average-sans text-center p-4">Sorry the Page You Are Looking It Wasnt Found</p>
        <p class="text-lg md:text-xl text-gray-900 dark:text-gray-100 font-average-sans text-center p-4">Click the Link to go Home</p>
        <a href="{{ url('/') }}" class="text-lg md:text-xl text-gray-900 dark:text-gray-100 font-average-sans p-4 underline hover:text-gray-500 dark:hover:text-gray-400">
            Go Home
        </a>
    </div>
</x-error-layout>
