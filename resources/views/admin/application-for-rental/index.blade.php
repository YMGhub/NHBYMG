<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application For Rental') }}
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
                                <th scope="col" class="px-6 py-3">APPLICANT: Mr. Miss. Mrs. </th>
                                <th scope="col" class="px-6 py-3">Address </th>
                                <th scope="col" class="px-6 py-3">CO-APPLICANT: Mr. Miss. Mrs.</th>
                                <th scope="col" class="px-6 py-3">Address </th>
                                <th scope="col" class="px-6 py-3">NATIONAL REGISTRATION NUMBER</th>
                                <th scope="col" class="px-6 py-3">EMPLOYER</th>
                                <th scope="col" class="px-6 py-3">OCCUPATION</th>
                                <th scope="col" class="px-6 py-3">CITIZENSHIP</th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-5">{{ $item->applicant_surname }} {{ $item->applicant_first }}
                                    </td>
                                    <td class="px-6 py-5">{{ $item->applicant_address }}</td>
                                    <td class="px-6 py-5">{{ $item->co_applicant_surname }}
                                        {{ $item->co_applicant_name }}
                                    </td>
                                    <td class="px-6 py-5">{{ $item->co_applicant_address }}</td>
                                    <td class="px-6 py-5">{{ $item->national_registration_number }}</td>
                                    <td class="px-6 py-5">{{ $item->employer }}</td>
                                    <td class="px-6 py-5">{{ $item->occupation }}</td>
                                    <td class="px-6 py-5">{{ $item->citizenship }}</td>
                                    <td class="px-6 py-4 text-right">

                                        <a href="{{ route('admin.application-for-rental.edit', $item->id) }}"
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
