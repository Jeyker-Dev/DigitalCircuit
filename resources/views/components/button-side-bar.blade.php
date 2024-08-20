@props(['buttonClass' => ''])

<a href="#" class="w-full p-2 font-open-sans font-medium text-gray-200 hover:bg-gray-500 {{ $buttonClass }}">
    {{ $slot }}
</a>