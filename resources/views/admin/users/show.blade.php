<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Show User') }} {{ $user->name }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">



                <div class="row">
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
                            <span
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $user->name }}</span>
                        </div>
                    </div>
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                            <span
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $user->email }}</span>
                        </div>
                    </div>
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Roles:</label>
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $v)
                                    <label
                                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $v }}</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
