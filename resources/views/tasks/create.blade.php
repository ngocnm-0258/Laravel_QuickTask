<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Task Create!") }}
                </div>
            </div>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')" />

                    <x-text-input id="name" class="block p-4 mt-1 w-full"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autocomplete="name" />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="description" :value="__('Description')" />

                    <x-text-input id="description" class="block p-4 mt-1 w-full"
                        type="text"
                        name="description"
                        :value="old('description')"
                        required
                        autocomplete="description" />

                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="userid" :value="__('UserID')" />

                    <x-text-input id="user_id" class="block p-4 mt-1 w-full"
                        type="text"
                        name="user_id"
                        :value="old('user_id')"
                        required
                        autocomplete="user_id" />

                    <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                </div>

                <x-primary-button class="mt-4">
                    {{ __('Create') }}
                </x-primary-button>
            </form>
        </div>

    </div>
</x-app-layout>
