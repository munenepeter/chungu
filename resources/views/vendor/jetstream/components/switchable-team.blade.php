<section class="col-span-2 mx-auto">
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.5/dist/alpine.js"></script>
    @endpush
    <div class="relative" x-data="{ activeSlide: 1, slides: [1, 2, 3, 4, 5] }">
        <a href="/shop/offers">
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="text-center mb-2 text-3xl font-black tracking-loose text-orange-550 dark:text-white">
                Mid <?= date("F") ?> offer</h5>
        </a>
        <!-- Slides -->
        <template x-for="slide in slides" :key="slide">
            <div x-show="activeSlide === slide" class="overflow-hidden relative h-72 px-2 z-0">
                <div class="duration-700 ease-in-out ">
                    <h2 class="text-green-550 text-center text-1xl font-black tracking-loose" x-text="slide">Earring</h2>
                    <img src="https://images.pexels.com/photos/1643389/pexels-photo-1643389.jpeg" class="rounded-md max-h-72 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" />
                </div>
        </template>
        <!-- Prev/Next Arrows -->
        <div class="absolute inset-0 flex -mt-24">
            <div class="flex items-center justify-start w-1/2">
                <button class="bg-white text-green-550 text-xl hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 -ml-6" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                    &#8592;
                </button>
            </div>
            <div class="flex items-center justify-end w-1/2">
                <button class="bg-white text-green-550 text-xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    &#8594;
                </button>
            </div>
        </div>

        <!-- Buttons -->
        <div class="absolute w-full flex items-center justify-center px-4 -mt-8">
            <template x-for="slide in slides" :key="slide">
                <button class="flex-1 w-2 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg" :class="{ 
              'bg-orange-600': activeSlide === slide,
              'bg-teal-300': activeSlide !== slide 
          }" x-on:click="activeSlide = slide"></button>
            </template>
        </div>

        <div class="mt-2 my-4 text-center space-x-4">
            <p class="mb-2 font-semibold text-gray-700 dark:text-gray-400">Get our featured offer at 10% off
                this season.</p>
            <h5 class="text-xl font-bold tracking-tight text-orange-550 dark:text-white">Offer
                valid till <?= date("j<\s\u\p>S</\s\u\p> M Y", strtotime(" + 1 day")); ?></h5>
        </div>
        <div class="items-center flex justify-around space-x-2 px-2">
            <a href="#" class="py-2 lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-green-550 rounded-lg hover:bg-white hover:text-green-550 border-2 border-green-550 focus:ring-4 focus:outline-none focus:ring-green-300">
                View Offer
            </a>
            <a href="/offers" class="py-2 lg:py-3 px-3 md:px-6 text-sm font-medium text-center text-green-550 rounded-lg focus:ring-4 hover:bg-green-550 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-green-550">
                More Offers
            </a>
        </div>


    </div>

</section>