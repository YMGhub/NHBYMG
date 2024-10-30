<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Our Department') }}
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
                    <a href={{ route('admin.our-department.create') }} style="float: right;"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Create</a>
                </div>



                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                        <tr class="text-gray">
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Title</th>
                            <th scope="col" class="px-6 py-3">Description</th>
                            <th scope="col" class="px-6 py-3">Actions</th>



                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ourdeparment as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">


                                <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                <td class="px-6 py-5">{{ $item->title }}</td>
                                <td class="px-6 py-5">{{ $item->description }}</td>

                                <td class="px-6 py-5">
                                    <a href="{{ route('our-department') }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a> |
                                    <a href="{{ route('admin.our-department.edit', $item) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    |
                                    <form action="{{ route('admin.our-department.destroy', $item->id) }}"
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

                <div class="d-flex justify-content-center mt-5">
                    {{ $ourdeparment->links() }}
                </div>






            </div>
        </div>
    </div>



</x-app-layout>
