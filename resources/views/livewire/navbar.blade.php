<nav x-data="{ open: false }" class="border-b border-asparagus-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-around md:justify-between py-4 items-center">
            <div class="hidden md:flex mx-6 md:-ml-10 ">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-logo class="w-8 h-8 text-japonica-500" />
                    </a>
                </div>
            </div>
            <form class="md:max-w-lg md:w-full max-w-sm w-1/2 relative">
                <input name="search" type="search" placeholder="Search..."
                    class="md:w-1/2 w-3/4 md:pl-10 pl-8 text-sm border-asparagus-400 border-b rounded-lg text-japonica-500 placeholder:text-asparagus-500 focus:outline-none focus:border-japonica-500 focus:ring-1 focus:ring-orange-500"
                    value="" />
                <button
                    class="absolute md:p-2 p-1 text-asparagus-500 transition -translate-y-1/2 rounded-md left-1 top-1/2 hover:bg-japonica-500">
                    <span class="sr-only">Submit Search</span>

                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#799649;" class="w-4 h-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </form>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 md:flex mx-4">
                @foreach ($categories as $category)
                    <a class="text-sm text-asparagus-500 hover:text-japonica-500 whitespace-nowrap"
                        href="/shop/collections/{{ $category->slug }}">
                        {{ __($category->name) }}
                    </a>
                @endforeach
            </div>
            <div class="md:hidden">
                <a class="text-sm text-asparagus-500 hover:text-japonica-500" href="{{route('collections')}}">
                    {{ __('Collections') }}
                </a>
            </div>
            {{-- shopping cart btn --}}
            <button class="md:-mr-10 text-sm text-japonica-500 hover:text-japonica-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="md:w-6 md:h-6 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </button>
        </div>
    </div>
</nav>
