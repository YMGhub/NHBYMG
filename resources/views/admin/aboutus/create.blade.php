<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('About Us Areas Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">

                <form action="{{ route('admin.about.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="section1">Section
                            1</label>
                        <textarea class="form-control" id="section1" name="section1">{{ old('section1') }}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="section2">Section
                            2</label>
                        <textarea class="form-control" id="section2" name="section2">{{ old('section2') }}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300" for="section3">Section
                            3</label>
                        <textarea class="form-control" id="section3" name="section3">{{ old('section3') }}</textarea>
                    </div>
                    <br>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">Create
                        Content</button>
                    <br>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('section1');
        CKEDITOR.replace('section2');
        CKEDITOR.replace('section3');
    </script>
</x-app-layout>
