<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<main class="p-8">
    <section id="Earrings">
    <center>
        <a class="py-4" href="/shop/earrings">
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
        </a>
        </center>
        <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
            <div class="col-span-1"></div>
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-span-2 mx-auto">
                    <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="/shop/earrings?pro_id=8hcjd9">
                            <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg " src="../static/imgs/earrings/fancy-beads.jpg" alt="">
                        </a>
                        <div class="mt-8">
                            <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                            <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="col-span-1"></div>
        </div>
    </section>

    <section id="necklaces" class="mx-auto">
    <center>
        <a class="py-4" href="/shop/necklaces">
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
        </a>
        </center>
        <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
            <div class="col-span-1"></div>
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-span-2 mx-auto">
                    <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="#">
                            <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg " src="../static/imgs/earrings/fancy-beads.jpg" alt="">
                        </a>
                        <div class="mt-8">
                            <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                            <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="col-span-1"></div>
        </div>
    </section>

    <section id="Bracelets">
    <center>
        <a class="py-4" href="/shop/bracelets">
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Bracelets</h5>
        </a>
        </center>
        <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
            <div class="col-span-1"></div>
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-span-2 mx-auto">
                    <div class="max-w-sm bg-white rounded-lg">
                        <a class="" href="#">
                            <img class="transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                        </a>
                        <div class="mt-8">
                            <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                            <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="col-span-1"></div>
        </div>
    </section>

    <section id="Anklets">
   <center>
   <a class="py-4" href="/shop/anklets">
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Anklets</h5>
        </a>
   </center>
        <div class="my-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
            <div class="col-span-1"></div>
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <div class="col-span-2 mx-auto">
                    <div class="max-w-sm bg-white rounded-lg">
                        <a class="" href="#">
                            <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg " src="../static/imgs/earrings/fancy-beads.jpg" alt="">
                        </a>
                        <div class="mt-8">
                            <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                            <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="col-span-1"></div>
        </div>
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>