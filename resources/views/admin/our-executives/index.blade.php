<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Our Executive Information') }}
        </h2>
    </x-slot>

    <div class="py-12 containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Rol</th>
                            <th>email_executive</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contents as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name_executive }}</td>
                                <td>{{ $item->rol_executive }}</td>
                                <td>{{ $item->email_executive }}</td>
                                <td>{{ $item->iteration }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</x-app-layout>
