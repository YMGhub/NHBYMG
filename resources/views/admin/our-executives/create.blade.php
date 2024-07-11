<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Create Executive') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">

                <!--div id="contact-message"></div-->
                @if (Session::has('success'))
                    <div class="alert alert-success alert-custom alert-success-custom">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif

                <form action="{{ route('admin.our-executives.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section1">Phone Executive</label>
                        <input type="file" class="form-control  " id="photo_path" name="photo_path">
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section2">Name Executive</label>
                        <input type="text" class="form-control" id="name_executive" name="name_executive" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Rol Executive</label>
                        <input type="text" class="form-control" id="rol_executive" name="rol_executive" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Phone Executive</label>
                        <input type="tel" class="form-control" id="phone_executive" name="phone_executive" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Email Executive</label>
                        <input type="email" class="form-control" id="email_executive" name="email_executive" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Facebook Link Executive</label>
                        <input type="text" class="form-control" id="facebook_executive" name="facebook_executive"
                            required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Twitter Link Executive</label>
                        <input type="text" class="form-control" id="twitter_executive" name="twitter_executive"
                            required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Google Plus Lik Executive</label>
                        <input type="text" class="form-control" id="gplus_executive" name="gplus_executive" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 labelSection"
                            for="section3">Linkedin Link Executive</label>
                        <input type="text" class="form-control" id="linkedin_executive" name="linkedin_executive"
                            required>
                    </div>
                    <br>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">Create
                        Executive</button>
                    <br>
                </form>

            </div>
        </div>
    </div>


</x-app-layout>
