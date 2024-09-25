<div>
    <x-form-admin method="POST" wire:submit.prevent="save" class="bg-sky-500">

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Name Brand')" class="py-2 ml-14" />
            <x-text-input id="name" placeholder="Example: Apple" type="text" wire:model='name' :value="old('name')" class="block w-10/12 mx-auto mt-1" required autofocus autocomplete="name" />

            @error("name")
                <div class="w-10/12 mx-auto my-4">
                    <livewire:error-alert :message="$message" />
                </div>
            @enderror
        </div>

        <x-input-form class="block w-10/12 mx-auto mt-8 text-center hover:bg-sky-510" value="{{ __('Create Brand') }}" />
    </x-form-admin>
</div>
