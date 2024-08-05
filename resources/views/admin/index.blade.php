<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-gray text-center">
                            <th scope="col" class="px-6 py-3">Content</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--About us-->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5"> About Us, Vision and Mission</td>
                            <td class="px-6 py-5">

                                @if ($recordAboutsUs)
                                    <a href="{{ url('/admin/about-us/edit/1') }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Edit
                                    </a>
                                @else
                                    | <a href="{{ url('/admin/about-us/create') }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Create
                                    </a>
                                @endif

                            </td>
                        </tr>
                        <!--About us-->
                        <!--Our Executive-->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5"> Our Executives</td>
                            <td class="px-6 py-5">

                                <a href="{{ url('/admin/our-executives') }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    View
                                </a>


                            </td>
                        </tr>
                        <!--Our Executive-->

                        <!--Our Executive-->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5">Our Departments</td>
                            <td class="px-6 py-5">

                                <a href="{{ url('/admin/our-department') }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    View
                                </a>


                            </td>
                        </tr>
                        <!--Our Executive-->

                        <!--Commercial Endeavors -->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5">Commercial Endeavors</td>
                            <td class="px-6 py-5">


                                <a href="{{ url('/admin/commercial-endeavors') }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    View
                                </a>


                            </td>
                        </tr>
                        <!--Commercial Endeavors -->


                        <!--Career -->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5">Career</td>
                            <td class="px-6 py-5">


                                <a href="{{ url('/admin/career') }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    View
                                </a>


                            </td>
                        </tr>
                        <!--Career -->

                        <!--FAQS -->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5">FAQS</td>
                            <td class="px-6 py-5">


                                <a href="{{ url('/admin/faqs') }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    View
                                </a>


                            </td>
                        </tr>
                        <!--FAQS -->

                        <!--Our Projects -->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                            <td class="px-6 py-5">Our Projects</td>
                            <td class="px-6 py-5">


                                <a href="{{ url('/admin/our-projects') }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    View
                                </a>


                            </td>
                        </tr>
                        <!--Our Projects -->

                    </tbody>
                </table>



            </div>
        </div>
    </div>
</x-app-layout>
