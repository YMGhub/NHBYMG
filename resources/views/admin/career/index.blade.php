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
                                <th scope="col" class="px-6 py-3">Actions</th>
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
                                    <td class="px-6 py-5">{{ $item->resume }}</td>
                                    <td class="px-6 py-5">{{ $item->cover_letter }}</td>
                                    <td class="px-6 py-5">
                                        <a href="{{ route('our-executives') }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                        |
                                        <a href="{{ route('admin.our-executives.edit', $item->id) }}"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        |

                                        <form action="{{ route('admin.our-executives.destroy', $item->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
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
