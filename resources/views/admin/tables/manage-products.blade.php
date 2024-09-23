<x-admin-layout>
    <x-subtitle :value="__('Manage Products')"/>

    @if (session()->has("message"))
        <livewire:success-alert :message="session('message')" />
    @endif

    <livewire:manage-products :products="$products" />

</x-admin-layout>