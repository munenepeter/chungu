<x-guest-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="relative ">
            <div class="md:grid md:grid-cols-4 md:gap-4">
                <div class="hidden md:block md:my-8">
                    <img src="https://chungu.co.ke/static/imgs/rotated-right.png" class="mt-72 h-20 md:h-28 lg:h-72 w-64" alt="" srcset="">
                </div>
                <x-jet-switchable-team></x-jet-switchable-team>
                <div class="hidden md:block md:my-8">
                    <img style="float:right;" class="mt-72 h-20 md:h-28 lg:h-72 w-64" src="https://chungu.co.ke/static/imgs/olive.png" alt="" srcset="">
                </div>
            </div>
        </div>
        <h5 class="ml-96 text-xl text-left font-bold tracking-tight text-orange-550">Shop by Category</h5>

        <section class="grid grid-cols-6 gap-2 justify-items-center py-6 items-center">
            <button class="bg-white text-green-550 text-4xl hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                &#8592;
            </button>

            @for($i = 1; $i<5; $i++) 
            <article class="flex items-center justify-center flex-col gap-2 p-2">
                <img src="https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-24 h-24 rounded-full object-cover transition duration-200 hover:scale-110">

                <div class="my-2 text-orange-550 text-lg font-semibold">Category</div>
                </article>
                @endfor



                <button class="bg-white text-green-550 text-4xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    &#8594;
                </button>
        </section>



        <a href="/offers" class="my-4 ml-96 text-xl py-2 lg:py-3 px-3 md:px-6 font-medium text-center text-green-550 rounded-lg focus:ring-4 hover:bg-green-550 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-green-550">
                More Offers
            </a>



    </div>
</x-guest-layout>