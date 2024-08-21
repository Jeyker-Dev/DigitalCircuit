<div>
    <form action="">
        @csrf
        <!-- Name Field -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full pl-10" type="email" name="email" placeholder="example@site.com" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </form>
</div>
