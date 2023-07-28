<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("User Detail!") }}
                </div>
            </div>

            <div class="mt-4">
                <x-input-label for="first-name" :value="__('FirstName')" />

                <x-text-input id="first-name" class="block p-4 mt-1 w-full"
                    type="text"
                    name="first_name"
                    value="{{ $user->first_name }}"
                    disabled
                    autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-input-label for="last-name" :value="__('LastName')" />

                <x-text-input id="last-name" class="block p-4 mt-1 w-full"
                    type="text"
                    name="last_name"
                    value="{{ $user->last_name }}"
                    disabled
                    autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-input-label for="username" :value="__('UserName')" />

                <x-text-input id="username" class="block p-4 mt-1 w-full"
                    type="text"
                    name="username"
                    value="{{ $user->username }}"
                    disabled
                    autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="block p-4 mt-1 w-full"
                    type="email"
                    name="email"
                    value="{{ $user->email }}"
                    disabled
                    autocomplete="email" />
            </div>

            <a href="{{ route('users.index') }}">
                <x-primary-button class="mt-4">
                    {{ __('Back') }}
                </x-primary-button>
            </a>

        </div>

    </div>
</x-app-layout>
