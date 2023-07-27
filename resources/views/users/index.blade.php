<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("User List!") }}
                </div>
            </div>
            <div class="py-4">
                <x-primary-button>
                    {{ __('Create new user') }}
                </x-primary-button>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">{{ __("UserName") }}</th>
                        <th class="text-center" scope="col">{{ __("FullName") }}</th>
                        <th class="text-center" scope="col">{{ __("Action") }}</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $index => $user)
                        <tr>
                            <th class="text-center" scope="row">{{ $index }}</th>
                            <th class="text-center">{{ $user->username }}</th>
                            <th class="text-center">{{ $user->fullname }}</th>
                            <th class="text-center">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                    <x-primary-button class="mt-4">
                                        {{ __('Edit') }}
                                    </x-primary-button>
                                </a>
                                <x-secondary-button class="mt-4">
                                    {{ __('Delete') }}
                                </x-secondary-button>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
