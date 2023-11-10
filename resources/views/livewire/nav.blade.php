<nav x-data="{ open: false }" class="bg-white border-b border-asparagus-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between py-4 items-center">
            <div class="hidden md:flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-app-logo class="w-8 h-8 text-japonica-500" />
                    </a>
                </div>
            </div>
            <form class="max-w-lg md:w-full relative">
                <input name="term" type="search" placeholder="Search for products..."
                    class="w-1/2 pl-10 text-sm border-b border-asparagus-500 rounded-lg text-japonica-500 placeholder:text-asparagus-500 focus:outline-none focus:border-japonica-500 focus:ring-1 focus:ring-orange-500"
                    value="" />

                <button
                    class="absolute p-2 text-asparagus-500 transition -translate-y-1/2 rounded-md left-1 top-1/2 hover:bg-japonica-500">
                    <span class="sr-only">Submit Search</span>

                    <svg xmlns="http://www.w3.org/2000/svg" style="color:#799649;" class="w-4 h-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </form>
            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
             @foreach ($categories as $category)
             <a class="text-sm text-asparagus-500 hover:text-japonica-500" href="{{$category->slug}}">
                    {{ __($category->name) }}
                </a>
             @endforeach

            </div>
            <a class="md:hidden text-sm text-asparagus-500 hover:text-japonica-500" href="#">
                {{ __('Collections') }}
            </a>
            <a class="text-sm text-asparagus-500 hover:text-japonica-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="md:w-4 md:h-4 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </a>
        </div>
    </div>
</nav>
