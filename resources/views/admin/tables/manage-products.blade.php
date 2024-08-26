<x-admin-layout>
    <x-subtitle :value="__('Manage Products')"/>

    @if (session()->has("message"))
        <livewire:success-alert :message="session('message')" />
    @endif

    @php
        $headers = ['Image', 'Name', 'Price', 'Category', 'Brand', 'Stock', 'Actions'];
        $data = $products->map(function($product) {
            return [
                '<img class="mask mask-squircle h-16 w-16 mx-auto" src="' . asset('uploads/' . $product->image) . '" alt="Imagen ' . $product->name . '" />',
                $product->name,
                '$' . $product->price,
                $product->categories->name,
                $product->brands->name,
                $product->stock,
                '<div class="flex items-center justify-center">
                    <a class="btn btn-ghost btn-xs bg-green-500 hover:bg-green-510 rounded mr-4 w-16" href="' . route('products.edit', $product->id) . '">edit</a>
                    <a class="btn btn-ghost btn-xs bg-red-500 hover:bg-red-510 rounded mr-4 w-16" href="">delete</a>
                    <a class="btn btn-ghost btn-xs bg-sky-500 hover:bg-sky-510 rounded w-16" href="">show</a>
                </div>'
            ];
        })->toArray();
    @endphp

    <x-table :headers="$headers" :data="$data" />
</x-admin-layout>