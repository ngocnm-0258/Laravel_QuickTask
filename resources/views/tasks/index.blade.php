<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Task List!") }}
                </div>
            </div>
            <div class="py-4">
                <x-primary-button>
                    {{ __('Create new task') }}
                </x-primary-button>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th class="text-center" scope="col">ID</th>
                    <th class="text-center" scope="col">{{ __("Name") }}</th>
                    <th class="text-center" scope="col">{{ __("Description") }}</th>
                    <th class="text-center" scope="col">{{ __("Action") }}</th>
                </tr>
                </thead>

                <tbody>
                @foreach($tasks as $index => $task)
                    <tr>
                        <th class="text-center" scope="row">{{ $index }}</th>
                        <th class="text-center">{{ $task->name }}</th>
                        <th class="text-center">{{ $task->description }}</th>
                        <th class="text-center">
                            <a href="{{ route('tasks.edit', ['task'    => $task->id]) }}">
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
