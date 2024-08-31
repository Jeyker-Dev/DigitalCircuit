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
                <a class="btn btn-ghost btn-xs bg-green-500 hover:bg-green-510 rounded mr-4 w-16" href="' . route('products.edit', $product->id) . '">edit</a>
                <button class="btn btn-ghost btn-xs bg-red-500 hover:bg-red-510 rounded mr-4 w-16" wire:click="$dispatch(\'confirmDelete\', {productId:' . $product->id . '})">delete</button>
                <a class="btn btn-ghost btn-xs bg-sky-500 hover:bg-sky-510 rounded w-16" href="">show</a>
                </div>'
            ];
        })->toArray();
    @endphp
    
    <x-table :headers="$headers" :data="$data" />
    
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
                        // Aquí puedes llamar a un método de Livewire para eliminar el producto
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