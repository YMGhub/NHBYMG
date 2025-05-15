<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Settings Website') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">

                <!--div id="contact-message"></div-->
                @if (Session::has('success'))
                    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                        role="alert">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif

                @if ($errors->any())
                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <!-- Logo -->
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="logo">Site
                            Logo</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="file" name="logo" id="logo">
                        @if ($settings && $settings->logo)
                            <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo Actual"
                                style="max-width: 200px;">
                        @endif
                    </div>

                    <!-- Descripción del Sitio -->
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="site_description">Site Description</label>
                        <textarea class="form-control" name="site_description" id="site_description">{{ $settings->site_description ?? '' }}</textarea>
                    </div>

                    <!-- Descripción contact us del Sitio -->
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="site_contact_us">Site Description Contact Us Footer</label>
                        <textarea class="form-control" name="site_contact_us" id="site_contact_us">{{ $settings->site_contact_us ?? '' }}</textarea>
                    </div>

                    <!-- URLs de Redes Sociales -->
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="facebook_url">Link Facebook</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="text" name="facebook_url" value="{{ $settings->facebook_url ?? '' }}">
                    </div>


                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="instagram_url">Link Instagram</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            type="text" name="instagram_url" value="{{ $settings->instagram_url ?? '' }}">
                    </div>

                     <!-- Privacy and Policy -->
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="policy">Privacy and Policy</label>
                        <textarea class="form-control" name="policy" id="policy">{{ $settings->policy ?? '' }}</textarea>
                    </div>

                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">Save</button>
                </form>



            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('site_description');
        CKEDITOR.replace('site_contact_us');
        CKEDITOR.replace('policy');
    </script>

</x-app-layout>
