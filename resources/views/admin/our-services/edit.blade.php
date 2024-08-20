<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Our Service') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <form action="{{ route('admin.our-services.update', $content->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <input value="{{ $content->id }}" name="id_ourservices" id="id_ourservices" type="hidden">


                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title:</label>
                            <input type="text" name="title" value="{{ $content->title }}"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                placeholder="Title">
                        </div>

                        <div class="mb-6">
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description:</label>
                            <textarea class="form-control" id="description" name="description">{{ $content->description }}</textarea>

                        </div>


                        <div class="mb-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Images
                                Projects:</label>
                            <input type="file" name="image_path"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                            <div class="container">
                                <strong class="block mb-2 text-sm font-medium text-white-900 dark:text-white">Current
                                    Images:</strong>
                                <div class="flex">
                                    @foreach ($content1 as $image)
                                        <div class="col-md-3">
                                            <img src="{{ url('/storage/our_services/' . $image->path) }}"
                                                width="100px">
                                            <label>
                                                <input type="checkbox" name="remove_images[]"
                                                    value="{{ $image->getAttributes()['id'] }}">
                                                Remove
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>




                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                            Update Our Service
                        </button>
                        <br>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>


</x-app-layout>
