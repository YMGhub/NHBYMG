<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('API Settings') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
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


                <form action="{{ route('admin.api-settings.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group" style="margin-bottom:10px">
                        <label for="api_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">API
                            URL</label>
                        <input type="text" value="{{ $apiSetting->api_url ?? '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="api_url" required>
                    </div>

                    <div class="form-group" style="margin-bottom:10px">
                        <label for="auth_key" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Auth
                            Key (Nombre del Header)</label>
                        <input type="text" value="{{ $apiSetting->auth_key ?? '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="auth_key" required>
                    </div>


                    <div class="form-group" style="margin-bottom:10px">
                        <label for="auth_value"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Auth Value (Clave de
                            Autenticación)</label>
                        <input type="text" value="{{ $apiSetting->auth_value ?? '' }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            name="auth_value" required>
                    </div>




                    <button style="margin-top:25px" type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">Submit
                    </button>
                </form>


            </div>

        </div>
    </div>

</x-app-layout>
