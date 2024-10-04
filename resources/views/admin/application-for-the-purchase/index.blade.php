<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application For The Purchases') }}
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
                            <tr class="text-white">
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">Saludation </th>
                                <th scope="col" class="px-6 py-3">Surname </th>
                                <th scope="col" class="px-6 py-3">First</th>
                                <th scope="col" class="px-6 py-3">Middle </th>
                                <th scope="col" class="px-6 py-3">Maiden Name</th>
                                <th scope="col" class="px-6 py-3">Date </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-5">{{ $item->salutation }}</td>
                                    <td class="px-6 py-5">{{ $item->applicant_surname }}</td>
                                    <td class="px-6 py-5">{{ $item->applicant_first }}</td>
                                    <td class="px-6 py-5">{{ $item->applicant_middle }}</td>
                                    <td class="px-6 py-5">{{ $item->applicant_maiden_name }}</td>
                                    <td class="px-6 py-5">{{ $item->dateend }}</td>
                                    <td class="px-6 py-4 text-right">

                                        <a href="{{ route('admin.application-for-the-the-purchase.edit', $item->id) }}"
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
