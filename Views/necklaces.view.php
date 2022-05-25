<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>

<?php if (isset($_GET['pro_id'])) : ?>
    <div class="grid place-items-center">
        <div class="">
            <div class="max-w-sm bg-white rounded-lg">
                <a class="" href="/shop/necklaces?pro_id=8hcjd9">
                    <img class="h-48 object-cover transform transition duration-500 hover:scale-125 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                </a>
                <div class="mt-8">
                    <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                    <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                    <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Beautiful necklaces for every occassion</p>
                    <h5 class="mb-4 text-xl font-semibold tracking-tight text-pink-550 dark:text-white">Available colors</h5>
                </div>
                <div class="items-center flex justify-start mb-2">
                    <fieldset class="items-center flex justify-start mb-2">
                        <legend class="sr-only">Available Colors</legend>

                        <div class="flex items-center">
                            <input id="country-option-3" type="radio" name="color-gold" value="gold" class="w-6 h-6 bg-pink-550 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <label for="country-option-3" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Gold
                            </label>
                        </div>
                        <div class="flex items-center ml-4">
                            <input id="country-option-3" type="radio" name="color-silver" value="silver" class="w-6 h-6 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
                            <label for="country-option-3" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Silver
                            </label>
                        </div>

                        <div class="ml-4 flex items-center" x-data="{ pax: 1 }">
                            <input type="button" value="-" class="font-semibold p-5" data-field="quantity" x-on:click="pax--;if(pax < 1){pax = 1;}">
                            <input type="number" name="items" id="items" class="py-2 px-2 w-full border-gray-300 text-gray-900 text-sm rounded-lg" required min="1" max="4" :value="pax">
                            <input type="button" value="+" class="font-semibold p-5" data-field="quantity" x-on:click="pax++;if(pax > 5){pax = 1;}">
                        </div>
                    </fieldset>

                </div>
                <button type="submit" class="lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-green-550 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
                    Add to Bag
                </button>
            </div>
        </div>

        <a class="py-4" href="/shop/necklaces">
            <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">You May Also Like</h5>
        </a>
        <div class="flex space-x-6">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mx-auto p-4">
                <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="/shop/necklaces?pro_id=8hcjd9">
                        <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-64 rounded-lg " src="../static/imgs/necklaces/fancy-beads.jpg" alt="">
                    </a>
                    <div class="mt-8">
                    <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Chungu Collections</p>
                        <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
        </div>
    </div>
<?php else : ?>

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
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">necklaces
                    </a>
                    <a class=" hover:text-pink-550" rel="noopener noreferrer" href="#">Single necklaces
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

        <section id="necklaces" class="md:h-screen md:overflow-y-auto w-full md:overflow-x-hidden">
        <div class="container px-5 py-6 mx-auto">
        <center>
                <a class="py-4" href="/shop/necklaces">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
                </a>
            </center>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">    
                <?php for ($i = 0; $i < 12; $i++) : ?>
                    <div class="p-4 w-full">
                        <a href="necklaces/timeless-darlings-a98sf2" class="block relative h-56 rounded overflow-hidden">
                            <img alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../static/imgs/earrings/02.jpeg">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1 uppercase">necklaces</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium">Timeless Darlings</h2>
                            <p class="mt-1 text-pink-550">Ksh200.00</p>
                        </div>
                    </div>
                <?php endfor; ?> 
            </div>
            </div>
        </section>
    </main>
<?php endif; ?>
<?php
include_once 'sections/footer.view.php'
?>