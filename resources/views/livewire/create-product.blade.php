<div>
    <x-form-admin class="bg-sky-500" wire:submit.prevent='save' method="POST">   

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Name of Product')" class="py-2 ml-14" />
            <x-text-input id="name" class="block w-10/12 mx-auto mt-1" type="text" wire:model="name" placeholder="Example: Laptop HP" :value="old('name')" required autofocus autocomplete="name" />

            @error("name")
                <div class="w-10/12 mx-auto my-4">
                    <livewire:error-alert :message="$message" />
                </div>
            @enderror
        </div>

        <!-- Description Field -->
        <div>
            <x-input-label for="description" :value="__('Description of Product')" class="py-2 ml-14" />
            <x-text-area id="description" wire:model="description" placeholder="Example: A high-performance laptop" required autofocus autocomplete="description">
                {{ old('description') }}
            </x-text-area>

            @error("description")
            <div class="w-10/12 mx-auto my-4">
                <livewire:error-alert :message="$message" />
            </div>
            @enderror
            
        </div>

        <!-- Price Field -->
        <div>
            <x-input-label for="price" :value="__('Price of Product')" class="py-2 ml-14" />
            <x-text-input id="price" class="block w-10/12 mx-auto mt-1" type="number" step="0.01" wire:model="price" placeholder="Example: 999.99" :value="old('price')" required autofocus autocomplete="price" />
        </div>

        @error("price")
            <div class="w-10/12 mx-auto my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Categories Field -->
        <div>
            <x-input-label for="category" :value="__('Category of Product')" class="py-2 ml-14" />
            <x-select-form id="category" class="block w-10/12 mx-auto mt-1" wire:model="category">
                @if ($categories)
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                @endif
            </x-select-form>
        </div>

        @error("category")
            <div class="w-10/12 mx-auto my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Brands Field -->
        <div>
            <x-input-label for="brand" :value="__('Brand of Product')" class="py-2 ml-14" />
            <x-select-form id="brand" class="block w-10/12 mx-auto mt-1" wire:model="brand">
                @if ($brands)
                    @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                    @endforeach
                @endif
            </x-select-form>
        </div>

        @error("brand")
            <div class="w-10/12 mx-auto my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Stock Field -->
        <div>
            <x-input-label for="stock" :value="__('Stock of Product')" class="py-2 ml-14" />
            <x-text-input id="stock" class="block w-10/12 mx-auto mt-1" type="number" pattern="\d+" min="0" wire:model="stock" placeholder="Example: 1" :value="old('stock')" required autofocus autocomplete="stock" />
        </div>

        @error("stock")
            <div class="w-10/12 mx-auto my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Image Field -->
        <div>
            <x-input-label for="image" :value="__('Image of Product')" class="py-2 ml-14" />
            <x-file-input id="image" class="block w-10/12 py-2 mx-auto mt-1" type="file" accept="image/*" wire:model="image" required />
        </div>

        @error("image")
            <div class="w-10/12 mx-auto my-4">
                <livewire:error-alert :message="$message" />
            </div>
        @enderror

        <!-- Image Preview -->
        @if ($image)
            <div class="w-10/12 mx-auto my-6 h-52">
                <span class="text-lg font-bold text-gray-800 font-open-sans dark:text-gray-200"> Imagen: </span>
                <img src="{{ $image->temporaryUrl() }}" alt="Imagen Seleccionada" class="object-cover w-full h-full">
            </div>
        @endif

        <x-input-form class="block w-10/12 mx-auto mt-8 text-center hover:bg-sky-510" value="{{ __('Create Product') }}" />
    </x-form-admin>
</div>