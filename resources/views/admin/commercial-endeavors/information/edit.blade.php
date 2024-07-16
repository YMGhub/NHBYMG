<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Commercial Information Page') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <form action="{{ route('admin.commercial.endeavors.information.update', $commercial_info_page->id) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <input value="{{ $commercial_info_page->id }}" name="id_commercial_info_page"
                            id="id_commercial_info_page" type="hidden">


                        <div>
                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Page</label>
                            <input value="{{ $commercial_info_page->title_page }}" type="text" id="title_page"
                                name="title_page"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>


                        <div>
                            <label for=""
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description
                                Page</label>
                            <textarea id="description_page" name="description_page"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />{{ $commercial_info_page->description_page }}</textarea>
                        </div>

                    </div>




                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                        Update Commercial Information Page
                    </button>
                    <br>
                </form>

            </div>
        </div>
    </div>


</x-app-layout>
