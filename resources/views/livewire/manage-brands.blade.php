<div>
    @php
    $headers = ['ID', 'Name', "Actions"];
    $data = $brands->map(function($brand) {
        return [
            $brand->id,
            $brand->name,
            '<div class="flex items-center justify-center">
            <a class="btn btn-ghost btn-xs bg-green-500 hover:bg-green-510 rounded mr-4 w-16 text-white" href="' . route("brands.edit", $brand->id) . '">edit</a>
            <button class="btn btn-ghost btn-xs bg-red-500 hover:bg-red-510 rounded mr-4 w-16 text-white" wire:click="$dispatch(\'confirmDelete\', {brandId:' . $brand->id . '})">delete</button>
            </div>'
        ];
    })->toArray();
@endphp

<x-table :headers="$headers" :data="$data" />

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('livewire:init', function () {
        Livewire.on('confirmDelete', brandId => {
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
                    @this.call('deleteBrand', {brand: brandId});
                    Swal.fire(
                        'Deleted!',
                        'The Brand has been deleted.',
                        'success'
                    )
                }
            })
        });
    });
</script>
@endpush
</div>
