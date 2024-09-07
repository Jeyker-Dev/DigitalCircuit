<x-admin-layout>
    <h1 class="text-white dark:text-gray-200 text-2xl font-open-sans">Contenido</h1>
    
    <x-ts-button x-on:click="$dispatch('modal:my-modal-open')">Open</x-ts-button>

    <x-ts-modal id="my-modal" blur center size="3xl">
        <div class="p-4">
            <h2 class="text-lg font-bold">TallStackUi</h2>
            <p>Contenido del modal</p>
            <x-ts-button x-on:click="$dispatch('modal:my-modal-close')">Close</x-ts-button>
        </div>
    </x-ts-modal>
</x-admin-layout>