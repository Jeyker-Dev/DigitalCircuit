<div>
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
                <a class="btn btn-ghost btn-xs bg-green-500 hover:bg-green-510 rounded mr-4 w-16 text-white" href="' . route('products.edit', $product->id) . '">edit</a>
                <button class="btn btn-ghost btn-xs bg-red-500 hover:bg-red-510 rounded mr-4 w-16 text-white" wire:click="$dispatch(\'confirmDelete\', {productId:' . $product->id . '})">delete</button>
                <button class="btn btn-ghost btn-xs bg-sky-500 hover:bg-sky-510 rounded w-16 text-white" x-on:click="$dispatch(\'modal:my-modal-open\', {productId: ' . $product->id . ', productName: \'' . $product->name . '\', productImage: \'' . asset('uploads/' . $product->image) . '\', productDescription: \'' . $product->description . '\', productPrice: \'' . $product->price . '\'})">show</button>
                </div>'
            ];
        })->toArray();
    @endphp
    
    <x-table :headers="$headers" :data="$data" />

    <div x-data="{ open: false, productName: '', productImage: '', productDescription: '', productPrice: ''}" @modal:my-modal-open.window="open = true; productName = $event.detail.productName; productImage = $event.detail.productImage; productDescription = $event.detail.productDescription; productPrice = $event.detail.productPrice">
        <x-ts-modal x-show="open" id="my-modal" blur center size="3xl">
            <div class="p-4">
                <h2 class="font-bold font-open-sans text-gray-800 dark:text-gray-200 text-3xl text-center" x-text="productName">
                </h2>
                <div class="flex">
                    <img :src="productImage" alt="Imagen del producto" class="mt-4 w-72 h-72 object-cover object-center">

                    <div class="flex flex-col justify-center p-2">
                        <p x-text="productDescription" class="font-open-sans text-gray-800 dark:text-gray-200 text-base">
                        </p>

                        <span class="font-bold font-open-sans text-2xl text-sky-400">$<span x-text="productPrice"></span></span>
                    </div>
                </div>
                <x-ts-button x-on:click="open = false">Close</x-ts-button>
            </div>
        </x-ts-modal>
    </div>

    
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:init', function () {
            Livewire.on('confirmDelete', productId => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('deleteProduct', {product: productId});
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script>
    @endpush
</div>