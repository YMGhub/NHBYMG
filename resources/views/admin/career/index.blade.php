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

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="    overflow-x: auto;">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                            <tr class="text-white">
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">First Name</th>
                                <th scope="col" class="px-6 py-3">Last Name</th>
                                <th scope="col" class="px-6 py-3">Gender</th>
                                <th scope="col" class="px-6 py-3">Age</th>
                                <th scope="col" class="px-6 py-3">Phone Home</th>
                                <th scope="col" class="px-6 py-3">Phone Work</th>
                                <th scope="col" class="px-6 py-3">Phone Mobile</th>
                                <th scope="col" class="px-6 py-3">Email</th>
                                <th scope="col" class="px-6 py-3">Resume</th>
                                <th scope="col" class="px-6 py-3">Cover Letter</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-5">{{ $item->first_name }}</td>
                                    <td class="px-6 py-5">{{ $item->last_name }}</td>
                                    <td class="px-6 py-5">{{ $item->gender }}</td>
                                    <td class="px-6 py-5">{{ $item->age }}</td>
                                    <td class="px-6 py-5">{{ $item->phone_home }}</td>
                                    <td class="px-6 py-5">{{ $item->phone_work }}</td>
                                    <td class="px-6 py-5">{{ $item->phone_mobile }}</td>
                                    <td class="px-6 py-5">{{ $item->email }}</td>
                                    <td class="px-6 py-5">
                                        @if ($item->resume)
                                            <a href="{{ asset('storage/' . $item->resume) }}" download>Download
                                                Resume</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="px-6 py-5">
                                        @if ($item->cover_letter)
                                            <a href="{{ asset('storage/' . $item->cover_letter) }}" download>Download
                                                Cover
                                                Letter</a>
                                        @else
                                            -
                                        @endif
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
