<div class="">
    <x-form-admin wire:submit='save' method="POST">   

        <!-- Name Field -->
        <div>
            <x-input-label for="name" :value="__('Name of Product')" class="ml-14 py-2" />
            <x-text-input id="name" class="block mt-1 w-10/12 pl-10 mx-auto" type="text" wire:model="name" placeholder="Example: Laptop HP" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Description Field -->
        <div>
            <x-input-label for="description" :value="__('Description of Product')" class="ml-14 py-2" />
            <x-text-area id="description" wire:model="description" placeholder="Example: A high-performance laptop" required autofocus autocomplete="description">
                {{ old('description') }}
            </x-text-area>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Price Field -->
        <div>
            <x-input-label for="price" :value="__('Price of Product')" class="ml-14 py-2" />
            <x-text-input id="price" class="block mt-1 w-10/12 pl-10 mx-auto" type="number" step="0.01" wire:model="price" placeholder="Example: 999.99" :value="old('price')" required autofocus autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <!-- Categories Field -->
        <div>
            <x-input-label for="categories" :value="__('Categorie of Product')" class="ml-14 py-2" />
            <x-select-for>
                @if ($categories)
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category}}</option>
                    @endforeach
                @endif
            </x-select-for>
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
    </x-form-admin>
</div>