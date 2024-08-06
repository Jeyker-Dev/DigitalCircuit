@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm md:text-base lg:text-lg text-gray-600 dark:text-gray-200 my-2 font-average-sans']) }}>
    {{ $value ?? $slot }}
</label>
