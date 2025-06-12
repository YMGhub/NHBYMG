<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit Our Department') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <form action="{{ route('admin.our-department.update', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input value="{{ $data->id }}" name="id_department" id="id_department" type="hidden">
                    <div class="form-group">
                        <label for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" value="{{ $data->title }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="gallery"
                            class="block mb-2 text-sm font-medium text-white-900 dark:text-white">Gallery</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            type="file" class="form-control" name="gallery[]" multiple id="galleryInput">

                        <div class="container">
                            <strong class="block mb-2 text-sm font-medium text-white-900 dark:text-white">Current
                                Images:</strong>
                            <div class="flexz">
                                @foreach ($data1 as $image)
                                    <div class="col-md-12">
                                        <div class="flex" style="justify-content:space-between;  align-items: center;">
                                            <div style="width:33.3%">
                                            <img src="{{ url('/images/our_deparment/' . $image->path) }}" width="100px">
                                            <!-- Campo oculto para ID de la imagen -->
                                            <input type="hidden" name="existing_image_ids[]" value="{{ $image->id }}">
                                            </div>
                                            <div style="width:33.3%">
                                            <input value="{{ $image->title_image }}" type="text" name="title_image[]" placeholder="Title for image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                            <div style="width:33.3%;text-align:center;color:#fff">
                                            <label>
                                                <input type="checkbox" name="remove_images[]"
                                                    value="{{ $image->getAttributes()['id'] }}">
                                                Remove
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>



                    <div class="form-group">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500""
                            id="description" name="description" rows="10" required> {{ $data->description }}</textarea>
                    </div>

                    <br>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">Submit
                    </button>


                    <br>
                </form>

            </div>
        </div>
    </div>


</x-app-layout>
