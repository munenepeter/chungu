<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">

                    </a>
                </div>


            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                    {{ __('Shoes') }}
                </a>
                <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                    {{ __('Rings') }}
                </a>
            </div>


        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" :active="request() - > routeIs('dashboard')">
                {{ __('Dashboard') }}
            </a>
        </div>


    </div>
</nav>
