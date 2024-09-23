<x-admin-layout>
    <x-subtitle :value="__('Manage Brands')"/>

    @if (session()->has("message"))
        <livewire:success-alert :message="session('message')" />
    @endif

    <livewire:manage-brands :brands="$brands" />

</x-admin-layout>