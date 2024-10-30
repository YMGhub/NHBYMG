<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application For Employment Monthly') }}
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

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="    overflow-x: auto;">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                            <tr class="text-gray">
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">APPLICATION FOR THE POST OF </th>
                                <th scope="col" class="px-6 py-3">SURNAME </th>
                                <th scope="col" class="px-6 py-3">CHRISTIAN NAME</th>
                                <th scope="col" class="px-6 py-3">PERMANENT ADDRESS </th>
                                <th scope="col" class="px-6 py-3">TELEPHONE NO</th>
                                <th scope="col" class="px-6 py-3">DATE OF BIRTH</th>
                                <th scope="col" class="px-6 py-3">NATIONALITY</th>
                                <th scope="col" class="px-6 py-3">NATIONAL REGISTRATION NO</th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-5">{{ $item->application_for_the_post }}</td>
                                    <td class="px-6 py-5">{{ $item->surname }}</td>
                                    <td class="px-6 py-5">{{ $item->christian_names }}</td>
                                    <td class="px-6 py-5">{{ $item->permanent_address }}</td>
                                    <td class="px-6 py-5">{{ $item->telephone_no }}</td>
                                    <td class="px-6 py-5">{{ $item->date_of_birth }}</td>
                                    <td class="px-6 py-5">{{ $item->nationality }}</td>
                                    <td class="px-6 py-5">{{ $item->national_registration_no }}</td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('admin.application-for-employment-monthly.edit', $item->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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
