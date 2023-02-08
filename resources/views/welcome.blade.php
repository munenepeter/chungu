<x-guest-layout>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="relative ">
            <div class="mt-4 md:grid md:grid-cols-4 md:gap-4">
                <div class="hidden md:block md:my-8">
                    <img src="https://chungu.co.ke/static/imgs/rotated-right.png" class="mt-72 h-20 md:h-28 lg:h-72 w-64" alt="" srcset="">
                </div>
                <div class="col-span-2 mx-auto">
                    <a href="/shop/offers">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="text-center mb-2 text-3xl font-black tracking-loose text-orange-550 dark:text-white">
                            Mid <?= date("F") ?> offer</h5>
                    </a>
                    <!-- 	<div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96"> -->
                    <div class="overflow-hidden relative h-80 px-2 z-0">

                        <!-- Item 1 -->
                        <div id="carousel-item-1" class="hidden duration-700 ease-in-out ">
                            <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Earring</h2>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDpem_jE6PEtQH6VfOLnlU8fK1e3fVvjhwhqONt6eyEhEw6KXm-7yJaA-aK-Icl5KN9Yw&usqp=CAU" class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="House">
                        </div>
                        <!-- Item 2 -->

                        <div id="carousel-item-2" class="hidden duration-700 ease-in-out">
                            <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Earring</h2>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDpem_jE6PEtQH6VfOLnlU8fK1e3fVvjhwhqONt6eyEhEw6KXm-7yJaA-aK-Icl5KN9Yw&usqp=CAU" class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="House">
                        </div>
                        <!-- Item 3 -->

                        <div id="carousel-item-3" class="hidden duration-700 ease-in-out">
                            <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Earring</h2>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDpem_jE6PEtQH6VfOLnlU8fK1e3fVvjhwhqONt6eyEhEw6KXm-7yJaA-aK-Icl5KN9Yw&usqp=CAU" class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="House">
                        </div>
                        <!-- Item 4 -->
                        <div id="carousel-item-4" class="hidden duration-700 ease-in-out">
                            <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Earring</h2>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDpem_jE6PEtQH6VfOLnlU8fK1e3fVvjhwhqONt6eyEhEw6KXm-7yJaA-aK-Icl5KN9Yw&usqp=CAU" class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="House">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="my-2 flex justify-center space-x-3">
                        <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"></button>
                        <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"></button>
                        <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"></button>
                        <button id="carousel-indicator-4" type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"></button>
                    </div>

                    <div class="mt-8  text-center">
                        <p class="mb-8 font-semibold text-gray-700 dark:text-gray-400">Get our featured offer at 10% off
                            this season.</p>
                        <h5 class="mb-8 text-xl font-bold tracking-tight text-orange-550 dark:text-white">Offer
                            valid till <?= date("j<\s\u\p>S</\s\u\p> M Y", strtotime(" + 1 day")); ?></h5>
                    </div>
                    <div class="items-center flex justify-around space-x-2 px-2">
                        <a href="#" class="py-2 lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-green-550 rounded-lg hover:bg-white hover:text-green-550 border-2 border-green-550 focus:ring-4 focus:outline-none focus:ring-green-300">
                            Add to Bag
                        </a>
                        <a href="/offers" class="py-2 lg:py-3 px-3 md:px-6 text-sm font-medium text-center text-green-550 rounded-lg focus:ring-4 hover:bg-green-550 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-green-550">
                            More Offers
                        </a>
                    </div>

                </div>
                <div class="hidden md:block md:my-8">
                    <img style="float:right;" class="mt-72 h-20 md:h-28 lg:h-72 w-64" src="https://chungu.co.ke/static/imgs/olive.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>