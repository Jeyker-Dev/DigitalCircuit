<x-admin-layout>
    <x-subtitle :value="__('Edit Category')" />

    <livewire:update-category :category="$category" />
</x-admin-layout>