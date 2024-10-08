@props(['svgClass' => '', 'h1Class' => '', "divClass" => ""])

<div class="flex justify-center items-center {{ $divClass }}">
    <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-briefcase-2 text-black dark:text-white w-6 h-6 md:h-8 md:w-8 {{$svgClass}}"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 2a3 3 0 0 1 3 3v1h2a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3h-14a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3h2v-1a3 3 0 0 1 3 -3zm0 2h-4a1 1 0 0 0 -1 1v1h6v-1a1 1 0 0 0 -1 -1" /></svg>
    <h1 class="text-2xl md:text-3xl lg:text-4xl p-2 text-black dark:text-gray-200 font-bold font-open-sans {{ $h1Class }}">Digital Circuit</h1>
</div>