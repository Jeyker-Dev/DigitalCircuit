<div>
    <x-form-admin wire:submit.prevent='update' method="POST">

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Name of Product')" class="ml-14 py-2" />
            <x-text-input id="name" class="block mt-1 w-10/12 mx-auto" type="text" wire:model="name" placeholder="Example: Laptop HP" :value="old('name')" required autofocus autocomplete="name" />

            @error("name")
                <div class="mx-auto w-10/12 my-4">
                    <livewire:error-alert :message="$message" />
                </div>
            @enderror
        </div>

        <!-- Description Field -->
        <div>
            <x-input-label for="description" :value="__('Description of Product')" class="ml-14 py-2" />
            <x-text-area id="description" wire:model="description" placeholder="Example: A high-performance laptop" required autofocus autocomplete="description">
                {{ old('description') }}
            </x-text-area>

            @error("description")
            <div class="mx-auto w-10/12 my-4">
                <livewire:error-alert :message="$message" />
            </div>
            @enderror
            
        </div>

        <!-- Price Field -->
        <div>
            <x-input-label for="price" :value="__('Price of Product')" class="ml-14 py-2" />
            <x-text-input id="price" class="block mt-1 w-10/12 mx-auto" type="number" step="0.01" wire:model="price" placeholder="Example: 999.99" :value="old('price')" required autofocus autocomplete="price" />
        </div>

        @error("price")
            <div class="mx-auto w-10/12 my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Categories Field -->
        <div>
            <x-input-label for="category" :value="__('Category of Product')" class="ml-14 py-2" />
            <x-select-form id="category" class="mt-1 block mx-auto w-10/12" wire:model="category">
                @if ($categories)
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @endif
            </x-select-form>
        </div>

        @error("category")
            <div class="mx-auto w-10/12 my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Brands Field -->
        <div>
            <x-input-label for="brand" :value="__('Brand of Product')" class="ml-14 py-2" />
            <x-select-form id="brand" class="mt-1 block mx-auto w-10/12" wire:model="brand">
                @if ($brands)
                    @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                @endif
            </x-select-form>
        </div>

        @error("brand")
            <div class="mx-auto w-10/12 my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Stock Field -->
        <div>
            <x-input-label for="stock" :value="__('Stock of Product')" class="ml-14 py-2" />
            <x-text-input id="stock" class="block mt-1 w-10/12 mx-auto" type="number" pattern="\d+" min="0" wire:model="stock" placeholder="Example: 1" :value="old('stock')" required autofocus autocomplete="stock" />
        </div>

        @error("stock")
            <div class="mx-auto w-10/12 my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Image Field -->
        <div>
            <x-input-label for="image" :value="__('Image of Product')" class="ml-14 py-2" />
            <x-file-input id="image" class="block mt-1 w-10/12 mx-auto py-2" type="file" accept="image/*" wire:model="image_new" required />
        </div>

        @error("image")
            <div class="mx-auto w-10/12 my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Image Preview Actual -->
        <div class="mx-auto w-10/12 h-52 my-6">
            <span class="text-lg font-bold font-open-sans text-gray-800 dark:text-gray-200"> Current Image: </span>
            <img src="{{ asset("uploads/" . $product->image) }}" alt="Imagen Seleccionada" class="w-full h-full object-cover">
        </div>

        <!-- Image Preview New -->
        @if ($image_new)
        <div class="mx-auto w-10/12 h-52 my-6">
            <span class="text-lg font-bold font-open-sans text-gray-800 dark:text-gray-200"> New Image: </span>
            <img src="{{ $image_new->temporaryUrl() }}" alt="Imagen Seleccionada" class="w-full h-full object-cover">
        </div>
        @endif

        <x-input-form class="mt-8 block w-10/12 mx-auto text-center" value="{{ __('Save Changes') }}" />
    </x-form-admin>
</div>