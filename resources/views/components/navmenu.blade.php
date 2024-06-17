<!-- resources/views/components/navigation.blade.php -->

<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard2') }}">
                        <!--x-jet-application-mark class="block h-9 w-auto" /-->
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard2') }}" :active="request()->routeIs('dashboard2')">
                        {{ __('Dashboard2') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('page1') }}" :active="request()->routeIs('page1')">
                        {{ __('Page 1') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('page2') }}" :active="request()->routeIs('page2')">
                        {{ __('Page 2') }}
                    </x-jet-nav-link>
                    <!-- Add more links as needed -->
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @include('navigation-menu')
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': ! open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard2') }}" :active="request()->routeIs('dashboard2')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('page1') }}" :active="request()->routeIs('page1')">
                {{ __('Page 1') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('page2') }}" :active="request()->routeIs('page2')">
                {{ __('Page 2') }}
            </x-jet-responsive-nav-link>
            <!-- Add more links as needed -->
        </div>
    </div>
</nav>
