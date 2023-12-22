<section class="flex flex-col min-h-screen bg-asparagus-100 text-gray-800 p-[12px]">
    <h1 class="text-3xl">Product Category Page Title</h1>
    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mt-6">
        <span class="text-sm font-semibold">1-16 of {{ count($products) }} Products</span>
        <button class="relative text-sm focus:outline-none group mt-4 sm:mt-0">
            <div
                class="flex items-center justify-between w-40 h-10 px-3 border-2 border-gray-300 rounded hover:bg-gray-300">
                <span class="font-medium">
                    Popular
                </span>
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <div
                class="absolute z-10 flex-col items-start hidden w-full pb-1 bg-white shadow-lg rounded group-focus:flex">
                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Popular</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Featured</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Newest</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Lowest Price</a>
                <a class="w-full px-4 py-2 text-left hover:bg-gray-200" href="#">Highest Price</a>
            </div>
        </button>
    </div>
    <div
        class="grid 2xl:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-6 gap-y-12 w-full mt-6">
        <!-- Product Tile Start -->
        @forelse ($products as $product)
            <div>
                <a href="#" class="block h-64 rounded-lg shadow-lg bg-white"></a>
                <div class="flex items-center justify-between mt-3">
                    <div>
                        <a href="#" class="font-medium">Product Name</a>
                        <a class="flex items-center" href="#">
                            <span class="text-xs font-medium text-gray-600">by</span>
                            <span class="text-xs font-medium ml-1 text-indigo-500">Store Name</span>
                        </a>
                    </div>
                    <span class="flex items-center h-8 bg-indigo-200 text-indigo-600 text-sm px-2 rounded">$34</span>
                </div>
            </div>
        @empty
        <h1>EMpty</h1>
        @endforelse
        <!-- Product Tile End -->
    </div>
   
</section>
