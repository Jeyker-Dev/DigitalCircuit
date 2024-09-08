@props(['svg', 'onclick' => ''])

<button {{ $attributes->merge(['class' => 'w-full p-2 font-open-sans font-medium text-gray-200 hover:bg-gray-500']) }} x-on:click="{{ $onclick }}">
    {{ $slot }}
</button>