<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<main class="flex w-full">
    <aside class="hidden md:block h-screen sticky top-4 -z-50 w-1/4 mt-16 p-6 sm:w-60 text-green-550">
        <nav class="space-y-8 text-sm">
            <div class="space-y-4">
                <div class="flex flex-col space-y-4">
                    <a class="text-lg hover:text-pink-550" rel="noopener noreferrer" href="#">New Arrivals
                    </a>
                    <a class="text-lg hover:text-pink-550" rel="noopener noreferrer" href="#">Best Sellers</a>
                </div>
            </div>
            <div class="space-y-2">
                <div class="flex flex-col space-y-2">
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Shop All
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Earrings
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Single Earrings
                    </a>

                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Rings
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Necklaces + Pendants
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Braceletes
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Anklets
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Wedding</a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Men's</a>
                </div>
            </div>

        </nav>
    </aside>

    <section class="md:h-screen md:overflow-y-auto body-font w-full">
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/earrings">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                </a>
            </center>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                <?php foreach($earrings as $earring) : ?>
                    <div class=" p-4 w-full">
                        <a href="shop/earrings/<?=$earring->id;?>" class="block relative h-64 rounded overflow-hidden">
                            <img alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../<?=$earring->image;?>">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">EARRINGS</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?=ucwords($earring->name);?></h2>
                            <p class="mt-1 text-pink-550">Ksh<?=$earring->price;?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/necklaces">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
                </a>
            </center>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="p-4 w-full">
                        <a class="block relative h-64 rounded overflow-hidden">
                            <img alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../static/imgs/earrings/01.jpeg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">NECKLACES</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1 text-pink-550">Ksh200.00</p>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/bracelets">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Braceletes</h5>
                </a>
            </center>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class=" p-4 w-full">
                        <a class="block relative h-64 rounded overflow-hidden">
                            <img alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover object-center w-full h-full block" src="../static/imgs/earrings/03.jpeg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1 uppercase">Braceletes</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1 text-pink-550">Ksh200.00</p>
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
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class=" p-4 w-full">
                        <a class="block relative h-48 rounded overflow-hidden">
                            <img alt="Chungu Image" class="transform transition duration-500 hover:scale-110 object-cover object-center w-full h-full block" src="../static/imgs/anklets/02.jpeg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1 uppercase">Anklets</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1 text-pink-550 ">Ksh200.00</p>
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