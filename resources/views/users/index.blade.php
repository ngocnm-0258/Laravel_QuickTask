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
                <a href="{{ route('users.create') }}">
                    <x-primary-button>
                        {{ __('Create new user') }}
                    </x-primary-button>
                </a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">ID</th>
                        <th class="text-center" scope="col">{{ __("UserName") }}</th>
                        <th class="text-center" scope="col">{{ __("FullName") }}</th>
                        <th class="text-center" scope="col">{{ __("Task") }}</th>
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
                                @foreach($user->tasks as $task)
                                    {{ $task->name }}
                                @endforeach
                                <a href="{{ route('users.tasks', ['user' => $user->id]) }}">
                                    <x-primary-button>
                                        {{ __("Show user tasks") }}
                                    </x-primary-button>
                                </a>
                            </th>
                            <th class="text-center">
                                <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                    <x-primary-button class="mt-4">
                                        {{ __('Edit') }}
                                    </x-primary-button>
                                </a>

                                <a href="{{ route('users.show', ['user' => $user->id]) }}">
                                    <x-primary-button class="mt-4">
                                        {{ __('View') }}
                                    </x-primary-button>
                                </a>

                                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-primary-button type="submit"
                                        class="mt-4"
                                        onclick="return confirm('{{ __('Accept delete ?') }}')"
                                    >
                                        {{ __('Delete') }}
                                    </x-primary-button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-app-layout>
