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
                <x-input-label for="name" :value="__('Name')" />

                <x-text-input id="name" class="block p-4 mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{ $task->name }}"
                    disabled
                    autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-input-label for="description" :value="__('description')" />

                <x-text-input id="description" class="block p-4 mt-1 w-full"
                    type="text"
                    name="description"
                    value="{{ $task->description }}"
                    disabled
                    autocomplete="description" />
            </div>

            <div class="mt-4">
                <x-input-label for="userid" :value="__('UserID')" />

                <x-text-input id="user_id" class="block p-4 mt-1 w-full"
                    type="text"
                    name="user_id"
                    value="{{ $task->user_id }}"
                    disabled
                    autocomplete="user_id" />
            </div>

            <a href="{{ route('tasks.index') }}">
                <x-primary-button class="mt-4">
                    {{ __('Back') }}
                </x-primary-button>
            </a>

        </div>

    </div>
</x-app-layout>
