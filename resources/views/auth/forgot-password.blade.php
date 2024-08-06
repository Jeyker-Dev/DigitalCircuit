<x-guest-layout>
    <div class="mb-4">
        <x-form-text>
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </x-form-text>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <x-form-link href="{{ route('login')}}">
                {{ __('Log In')}}
            </x-form-link>

            <x-form-link href="{{ route('register')}}">
                {{ __('Register')}}
            </x-form-link>
        </div>

        <x-primary-button class="my-3">
            {{ __('Send Information') }}
        </x-primary-button>
    </form>
</x-guest-layout>
