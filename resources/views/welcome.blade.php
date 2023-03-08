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

            @for($i = 1; $i<5; $i++) <article class="flex items-center justify-center flex-col gap-2 p-2">
                <img src="https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600" class="w-24 h-24 rounded-full object-cover transition duration-200 hover:scale-110">

                <div class="my-2 text-orange-550 text-lg font-semibold">Category</div>
                </article>
                @endfor



                <button class="bg-white text-green-550 text-4xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 -mr-6" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                    &#8594;
                </button>
        </section>


        <div class="ml-96 my-12">
            <a href="/shop" class="text-xl py-2 lg:py-3 px-3 md:px-6 font-medium text-center text-green-550 rounded-lg focus:ring-4 hover:bg-green-550 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-green-550">
                More Offers
            </a>
        </div>

        <section class="mt-4" id="about" >
            <center>
                <h5 style="font-family: 'Cedarville Cursive', cursive;" class="my-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">About Chungu Collections</h5>
            </center>
            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center" style="background-image:url(https://images.unsplash.com/photo-1551970634-747846a548cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z3JlZW4lMjBsZWFmc3xlbnwwfHwwfHw%3D&w=1000&q=80);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
                <main class="p-5 z-10 mx-auto">
                    <a href="https://chungu.com" class="block text-white hover:text-pink-550 ">
                        <p style="font-family: 'Cedarville Cursive', cursive;" class="hover:text-pink-550 text-8xl font-black ">Chungu</p>
                        <p class="mt-4 text-4xl font-bold whitespace-nowrap dark:text-white hover:text-pink-550">COLLECTIONS</p>
                    </a>
                </main>
            </div>
            <div class="my-10  ">
                <div class="w-full lg:w-1/2 mx-auto p-4 md:p-2">
                    <p class="leading-loose text-center font-semibold text-md md:text-lg">We offer a wide range of beautiful and timeless pieces to suit any style. Whether you're looking for a special gift for a loved one or a treat for yourself, you'll find what you're looking for here. Our collection includes necklaces, bracelets, earrings, and rings crafted from high-quality materials, including gold, silver, and diamonds. We're dedicated to providing our customers with the best shopping experience possible, and that's why we offer free shipping, easy returns, and excellent customer service. Start browsing our collection today and discover the perfect piece of jewelry to enhance your style.</p>
                </div>
            </div>
        </section>





    </div>
</x-guest-layout>