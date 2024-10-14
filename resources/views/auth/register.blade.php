<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf

        <div class="mb-4 text-start">
            <h2 class="text-2xl font-semibold text-gray-800 mt-2">Register</h2>
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="px-40">
                {{ __('Register') }}
            </x-primary-button>
        </div>

        <!-- Additional Link -->
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">
                {{ __('Already have an account?') }}
                <a href="{{ route('login') }}" class="underline text-green-600 hover:text-green-500">
                    {{ __('Login here') }}
                </a>
            </p>
        </div>
    </form>
</x-guest-layout>
