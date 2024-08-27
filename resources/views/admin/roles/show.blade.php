<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Show Role') }} {{ $role->name }}
        </h2>
    </x-slot>


    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">

                <div class="row">
                    <div class="col-xs-12 mb-3">
                        <div class="form-group block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <strong class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</strong>
                            {{ $role->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 mb-3">
                        <div class="form-group">
                            <strong
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permissions:</strong>
                            @if (!empty($rolePermissions))
                                <ul class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                    @foreach ($rolePermissions as $v)
                                        <li>
                                            <labe class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                                {{ $v->name }},</label>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
