<?php

use Chungu\Models\Category;

include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<div class="relative">
        <div class="mt-4 md:grid md:grid-cols-4 md:gap-4">
            <div class="hidden md:block md:my-8">
                <img src="../static/imgs/rotated-right.png"
                    class="mt-72 h-20 md:h-28 lg:h-72 w-64" alt="" srcset="">
            </div>
            <div class="col-span-2 mx-auto">
                <a href="/shop/offers">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;"
                        class="text-center mb-2 text-3xl font-black tracking-loose text-pink-550 dark:text-white">
                        Father's Day offer</h5>
                </a>
                <!-- 	<div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96"> -->
                <div class="overflow-hidden relative h-80 px-2">

                    <!-- Item 1 -->
                    <div id="carousel-item-1" class="hidden duration-700 ease-in-out">
                    <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Anklet</h2>
                        <img src="<?php asset('imgs/offer/01.jpeg'); ?>"
                            class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="House">
                    </div>
                    <!-- Item 2 -->
                
                    <div id="carousel-item-2" class="hidden duration-700 ease-in-out">
                    <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Necklace</h2>
                        <img src="https://cdn.wallpapersafari.com/55/35/iy2arc.jpg"
                            class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="House">
                    </div>
                    <!-- Item 3 -->
                    
                    <div id="carousel-item-3" class="hidden duration-700 ease-in-out">
                    <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Earring</h2>
                        <img src="<?php asset('imgs/offer/03.jpeg'); ?>"
                            class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="House">
                    </div>
                    <!-- Item 4 -->
                    <div id="carousel-item-4" class="hidden duration-700 ease-in-out">
                        <h2 class="text-green-550 text-center text-1xl font-black tracking-loose">Belt</h2>
                        <img src="https://cdn.wallpapersafari.com/8/46/3kSAXE.jpg"
                            class="rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                            alt="House">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="my-2 flex justify-center space-x-3">
                    <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide 2"></button>
                    <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide 3"></button>
                    <button id="carousel-indicator-4" type="button" class="w-3 h-3 rounded-full" aria-current="false"
                        aria-label="Slide 4"></button>
                </div>

                <div class="mt-8  text-center">
                    <p class="mb-8 font-semibold text-gray-700 dark:text-gray-400">Get our featured offer at 20% off
                        this season.</p>
                    <h5 class="mb-8 text-xl font-bold tracking-tight text-pink-550 dark:text-white">Offer
                        valid until 29th June 2022</h5>
                </div>
                <div class="items-center flex justify-around space-x-2 px-2">
                    <a href="#"
                        class="py-2 lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-green-550 rounded-lg hover:bg-white hover:text-green-550 border border-2 hover:border-green-500 focus:ring-4 focus:outline-none focus:ring-green-300">
                        Add to Bag
                    </a>
                    <a href="/offers"
                        class="py-2 lg:py-3 px-3 md:px-6 text-sm font-medium text-center text-green-550 rounded-lg focus:ring-4 hover:bg-green-500 hover:text-white focus:outline-none focus:ring-green-300 border border-2 border-green-550">
                        More Offers
                    </a>
                </div>

            </div>
            <div class="hidden md:block md:my-8">
                <img style="float:right;" class="mt-72 h-20 md:h-28 lg:h-72 w-64"
                    src="../static/imgs/olive.png"
                    alt="" srcset="">
            </div>
        </div>
    </div>

 
 
<section id="second-part">
    <center>
        <h5 style="font-family: 'Cedarville Cursive'" class="mt-8 text-3xl font-black tracking-loose text-pink-550">Shop by Category</h5>
    </center>
    <div class="-ml-2 mt-8  mx-auto ">
        <div class="relative">
            <div id="carrusel" class="flex flex-row overflow-x-auto w-full ">
                <?php foreach (Category::all() as $category) : ?>
                    <div class="w-48 md:w-56 lg:w-64 xl:w-72  flex  flex-col items-center">
                        <div class="p-4 md:p-6 xl:p-8 w-48 md:w-64 h-48 md:h-64 ">
                        <span class="flex items-center justify-center w-full h-full rounded-full bg-pink-100">
                          <img class="rounded-full h-1/2 w-1/2" src="<?php asset("../../" . $category->image); ?>" alt="" srcset=""> 
                    </span>
                           
                        </div>
                        <a href="/shop/<?= $category->name; ?>" class="cursive text-center mt-4 text-xl font-bold tracking-tight text-pink-550"><?= ucwords($category->name); ?></a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="carrousel-left" class="arrow hidden md:block absolute p-3 p-3 cursor-pointer "><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-550" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                </svg></div>
            <button id="carrousel-right" class="arrow hidden md:block absolute right-0 p-3 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-pink-550" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg></button>

        </div>


    </div>
    <div class="mx-auto my-12">
        <center> <a href="/shop" class="py-4 px-8 text-sm font-medium text-center hover:text-green-550 rounded-lg focus:ring-4 hover:bg-white bg-green-550 text-white focus:outline-none focus:ring-green-300 border border-2 border-green-550">
                View More Items
            </a></center>
    </div>
</section>

<section id="about">
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
    <div class="my-10">
        <div class="w-full lg:w-1/2 mx-auto p-4 md:p-2">
            <p class="leading-loose text-center font-semibold text-md md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim eveniet saepe nostrum similique magni? Facilis corrupti laboriosam beatae reiciendis doloribus amet ipsum quibusdam magni explicabo voluptate iusto ea sit nam, error quas aliquid porro sequi facere, optio tenetur ducimus excepturi dignissimos. Velit, aut eligendi? Officiis magni eveniet corporis tempore impedit!</p>
        </div>
    </div>
</section>

<section id="testimonials">
    <div class="h-82 bg-cover bg-center" style="background-image:url(https://static.vecteezy.com/system/resources/previews/005/683/039/original/greenery-seamless-pattern-with-doodle-simple-eucalyptus-leaf-ornament-green-olive-background-vector.jpg);">


        <center>
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="py-4 text-3xl font-black tracking-loose text-white">Testimonials</h5>
        </center>

        <div id="default-carousel" class="relative mx-auto text-white" data-carousel="static">
            <div class="overflow-hidden relative h-40 rounded-lg sm:h-64 xl:h-80 2xl:h-96 p-2 ">
                <div class="ml-96 duration-1000  absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="">
                    <div class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        <div class="flex flex-row items-center w-full p-6 space-x-8 rounded-md lg:h-full lg:p-8 dark:bg-coolGray-900 dark:text-coolGray-100">
                            <img src="https://source.unsplash.com/random/100x100?4" alt="" class="w-20 h-20 rounded-full dark:bg-coolGray-500">

                            <div class="flex flex-col p-4">
                                <div class="text-lg font-medium ">Leroy Jenkins</div>
                                <blockquote class="max-w-lg text-lg ">"Et, dignissimos obcaecati. Recusandae praesentium doloribus vitae? Rem unde atque mollitia!"</blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ml-96 duration-1000  absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
                    <div class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

                        <div class="flex flex-row items-center w-full p-6 space-x-8 rounded-md lg:h-full lg:p-8 dark:bg-coolGray-900 dark:text-coolGray-100">
                            <img src="https://source.unsplash.com/random/100x100?4" alt="" class="w-20 h-20 rounded-full dark:bg-coolGray-500">

                            <div class="flex flex-col p-4">
                                <div class="text-lg font-medium ">2 Jenkins</div>
                                <blockquote class="max-w-lg text-lg ">"Et, dignissimos obcaecati. Recusandae praesentium doloribus vitae? Rem unde atque mollitia!"</blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ml-96  duration-1000  absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                    <div class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                        <div class="flex flex-row items-center w-full p-6 space-x-8 rounded-md lg:h-full lg:p-8 dark:bg-coolGray-900 dark:text-coolGray-100">
                            <img src="https://source.unsplash.com/random/100x100?4" alt="" class="w-20 h-20 rounded-full dark:bg-coolGray-500">

                            <div class="flex flex-col p-4">
                                <div class="text-lg font-medium ">3 Jenkins</div>
                                <blockquote class="max-w-lg text-lg ">"Et, dignissimos obcaecati. Recusandae praesentium doloribus vitae? Rem unde atque mollitia!"</blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>

            <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>

    </div>
</section>
<script>
    var elem = document.getElementById('carrusel');
    var right = document.getElementById('carrousel-right')

    var left = document.getElementById('carrousel-left')

    right.addEventListener('click', function() {
        elem.scrollLeft += 500
    })

    left.addEventListener('click', function() {
        elem.scrollLeft -= 500
    })
</script>
<?php
include_once 'sections/footer.view.php'
?>