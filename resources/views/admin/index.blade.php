<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">

                <!--Record about us-->
                @if ($recordAboutsUs)
                    <a href="{{ url('/admin/about-us/edit/1') }}" class="btn btn-xs btn-info pull-right text-white">
                        About Us, Vision and Mission
                    </a>
                @else
                    <a href="{{ url('/admin/about-us/edit/1') }}" class="btn btn-xs btn-info pull-right text-white">
                        Create About Us, Vision and Mission Content
                    </a>
                @endif
                <!--Record about us-->


            </div>
        </div>
    </div>
</x-app-layout>
