<div>
    <x-form-admin wire:submit.prevent='update' method="POST">

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Name of Brand')" class="ml-14 py-2" />
            <x-text-input id="name" class="block mt-1 w-10/12 mx-auto" type="text" wire:model="name" placeholder="Example: Nvidia" :value="old('name')" required autofocus autocomplete="name" />

            @error("name")
                <div class="mx-auto w-10/12 my-4">
                    <livewire:error-alert :message="$message" />
                </div>
            @enderror
        </div>

        <x-input-form class="mt-8 block w-10/12 mx-auto text-center" value="{{ __('Save Changes') }}" />
    </x-form-admin>
</div>