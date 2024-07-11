<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Edit About Us Areas Home') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                <form action="{{ route('admin.aboutus.update', $aboutus->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section1">About Us</label>
                        <textarea class="form-control" id="section1" name="section1">
                            {{ $aboutus->section1 }}

                    </textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section2">Mission</label>
                        <textarea class="form-control" id="section2" name="section2">{{ $aboutus->section2 }}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Vision</label>
                        <textarea class="form-control" id="section3" name="section3">{{ $aboutus->section3 }}</textarea>
                    </div>
                    <br>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                        Update Content
                    </button>
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
