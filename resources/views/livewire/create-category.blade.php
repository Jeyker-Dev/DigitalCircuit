<div>
    <x-form-admin method="POST" wire:submit.prevent="save">

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Name Category')" class="ml-14 py-2" />
            <x-text-input id="name" placeholder="Example: Laptop" type="text" wire:model='name' :value="old('name')" class="block mt-1 w-10/12 mx-auto" required autofocus autocomplete="name" />

            @error("name")
                <div class="mx-auto w-10/12 my-4">
                    <livewire:error-alert :message="$message" />
                </div>
            @enderror
        </div>

        <x-input-form class="mt-8 block w-10/12 mx-auto text-center" value="{{ __('Create Category') }}" />
    </x-form-admin>
</div>
