<x-guest-layout>


<aside class="bg-white hidden md:block h-fit sticky top-4 -z-50 w-1/4  p-6 sm:w-60 text-green-550">
    <nav class="space-y-8 text-sm">
        <div class="space-y-4">
            <div class="flex flex-col space-y-4">
                <a class="text-lg hover:text-orange-550" href="/shop/new-arrivals">New Arrivals <span class="text-teal-600 text-xs p-1">New</span>
                </a>
                <a class="text-lg hover:text-orange-550" href="/shop/best-sellers">Best Sellers</a>
                <a class="text-lg hover:text-orange-550" href="/shop/offers">Offers</a>
            </div>
        </div>
        <div class="space-y-2">
            <div class="flex flex-col space-y-2">
                <a class=" hover:text-orange-550" href="/shop/">Shop All
                </a>

                @for($i = 1; $i<7; $i++)
                    <a href="/shop/{{$i}}" class="hover:text-orange-500">test</a>
                @endfor
            </div>
        </div>

    </nav>
</aside>
</x-guest-layout>