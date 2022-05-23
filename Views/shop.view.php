<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<main class="flex w-full">
    <aside class="hidden md:block h-screen sticky top-4 -z-50 w-1/4 mt-12 p-6 sm:w-60 text-green-550">
        <nav class="space-y-8 text-sm">
            <div class="space-y-2">
                <div class="flex flex-col space-y-1">
                    <a rel="noopener noreferrer" href="#">New Arrivals
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Best Sellers</a>
                </div>
            </div>
            <div class="space-y-2">
                <div class="flex flex-col space-y-1">
                    <a class="" rel="noopener noreferrer" href="#">Shop All
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Earrings
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Single Earrings
                    </a>

                    <a class="" rel="noopener noreferrer" href="#">Rings
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Necklaces + Pendants
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Braceletes
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Anklets
                    </a>
                    <a class="" rel="noopener noreferrer" href="#">Wedding</a>
                    <a class="" rel="noopener noreferrer" href="#">Men's</a>
                </div>
            </div>

        </nav>
    </aside>

    <section class="h-screen overflow-y-auto body-font w-full">
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/earrings">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                </a>
            </center>
            <div class="grid grid-cols-1 grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class=" p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="transform transition duration-500 hover:scale-125 object-cover object-center w-full h-full block" src="../static/imgs/earrings/fancy-beads.jpg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">EARRINGS</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-gray-900 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1">Ksh200.00</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/necklaces">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
                </a>
            </center>
            <div class="grid grid-cols-3 gap-4 -m-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="transform transition duration-500 hover:scale-125 object-cover object-center w-full h-full block" src="../static/imgs/earrings/fancy-beads.jpg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">NECKLACES</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-gray-900 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1">Ksh200.00</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/Braceletes">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Braceletes</h5>
                </a>
            </center>
            <div class="grid grid-cols-3 gap-4 -m-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class=" p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="transform transition duration-500 hover:scale-125 object-cover object-center w-full h-full block" src="../static/imgs/earrings/fancy-beads.jpg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1 uppercase">Braceletes</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-gray-900 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1">Ksh200.00</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/anklets">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Anklets</h5>
                </a>
            </center>
            <div class="grid grid-cols-3 gap-4 -m-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class=" p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="ecommerce" class="transform transition duration-500 hover:scale-125 object-cover object-center w-full h-full block" src="../static/imgs/earrings/fancy-beads.jpg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1 uppercase">Anklets</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-gray-900 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1">Ksh200.00</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>