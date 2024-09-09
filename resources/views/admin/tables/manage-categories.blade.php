<x-admin-layout>
    <x-subtitle :value="__('Manage Products')"/>

    @if (session()->has("message"))
        <livewire:success-alert :message="session('message')" />
    @endif

    <livewire:manage-categories :categories="$categories" />

</x-admin-layout>