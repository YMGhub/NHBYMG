<!-- resources/views/properties/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Our Services') }}
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


                <div class="container">
                    <a href={{ route('properties.create') }} style="float: right;"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Create Our Propertie</a>
                </div>

                <div class="container">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                            <tr>
                                <th scope="col" class="px-6 py-3">Title</th>
                                <th scope="col" class="px-6 py-3">Address</th>
                                <th scope="col" class="px-6 py-3">Area</th>
                                <th scope="col" class="px-6 py-3">Bedrooms</th>
                                <th scope="col" class="px-6 py-3">Bathrooms</th>
                                <th scope="col" class="px-6 py-3">Category</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                                <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($properties as $property)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $property->title }}</td>
                                    <td class="px-6 py-5">{{ $property->address }}</td>
                                    <td class="px-6 py-5">{{ $property->area }} sq ft</td>
                                    <td class="px-6 py-5">{{ $property->bedrooms }}</td>
                                    <td class="px-6 py-5">{{ $property->bathrooms }}</td>
                                    <td class="px-6 py-5">{{ $property->category->name }}</td>
                                    <td class="px-6 py-5">{{ ucfirst($property->status) }}</td>
                                    <td class="px-6 py-5">
                                        <a href="{{ route('properties.show', $property) }}"
                                            class="btn btn-info">View</a>
                                        <a href="{{ route('properties.edit', $property) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('properties.destroy', $property) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
