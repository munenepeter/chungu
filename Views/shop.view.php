<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<div class="p-8">
<section id="Earrings">
    <a href="#">
        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
    </a>
    <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-4 gap-2  lg:gap-4">

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mx-auto">
                <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="#">
                        <img class="transform transition duration-500 hover:scale-125w-48 h-32 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                    </a>
                    <div class="mt-8">
                        <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                        <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>


    </div>
</section>

<section id="necklaces">
    <a href="#">
        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
    </a>
    <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-4 gap-2  lg:gap-4">

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mx-auto">
                <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="#">
                        <img class="w-48 h-32 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                    </a>
                    <div class="mt-8">
                        <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                        <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<section id="Bracelets">
    <a href="#">
        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Bracelets</h5>
    </a>
    <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-4 gap-2  lg:gap-4">

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mx-auto">
                <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="#">
                        <img class="w-48 h-32 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                    </a>
                    <div class="mt-8">
                        <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                        <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<section id="Anklets">
    <a href="#">
        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Anklets</h5>
    </a>
    <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-4 gap-2  lg:gap-4">

        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mx-auto">
                <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="#">
                        <img class="w-48 h-32 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                    </a>
                    <div class="mt-8">
                        <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                        <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
</div>