<div>
    @php
    $headers = ['ID', 'Name', "Actions"];
    $data = $categories->map(function($category) {
        return [
            $category->id,
            $category->name,
            '<div class="flex items-center justify-center">
            <a class="btn btn-ghost btn-xs bg-green-500 hover:bg-green-510 rounded mr-4 w-16 text-white">edit</a>
            <button class="btn btn-ghost btn-xs bg-red-500 hover:bg-red-510 rounded mr-4 w-16 text-white">delete</button>
            </div>'
        ];
    })->toArray();
@endphp

<x-table :headers="$headers" :data="$data" />
</div>
