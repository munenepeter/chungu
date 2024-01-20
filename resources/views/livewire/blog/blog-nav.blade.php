<nav x-data="{ open: false }" class="border-b border-asparagus-50">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-around md:justify-between py-4 items-center">
            <div class="hidden md:flex mx-6 md:-ml-10 "">
                <!-- Logo -->
                    <a href="{{route('blog')}}" class="text-lg font-bold text-asparagus-500 whitespace-nowrap">
                      Chungu Blog
                    </a>
            </div>
            <form class="md:max-w-lg md:w-full max-w-sm w-1/2 relative">
                <input name="search" type="search" placeholder="Search..."
                    class="md:w-1/2 w-3/4 md:pl-10 pl-8 text-sm border-japonica-400 border-b rounded-lg text-japonica-500 placeholder:text-japonica-500 focus:outline-none focus:border-japonica-500 focus:ring-1 focus:ring-orange-500"
                    value="" />
                <button
                    class="absolute md:p-2 p-1 text-japonica-500 transition -translate-y-1/2 rounded-md left-1 top-1/2 hover:bg-asparagus-500">
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
                    <a class="text-sm text-japonica-500 hover:text-asparagus-500 whitespace-nowrap"
                        href="/shop/collections/{{ $category->slug }}">
                        {{ __($category->name) }}
                    </a>
                @endforeach
            </div>
            <div class="md:hidden">
                <a class="text-sm text-japonica-500 hover:text-asparagus-500" href="{{route('collections')}}">
                    {{ __('Collections') }}
                </a>
            </div>
          
        </div>
    </div>
</nav>

