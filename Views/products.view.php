<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';


$product = $product[0];
?>

<div class="grid place-items-center">
    <div class="">
        <div class="max-w-sm bg-white rounded-lg">

            <img class="object-cover transform transition duration-500 hover:scale-125 rounded-lg" src="/../<?= $product->image; ?>" alt="">

            <div class="mt-8">
                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400"><?= $product->name; ?></p>
                <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh <?= $product->price; ?></p>
                <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Beautiful earrings for every occassion</p>
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
            <div class="flex justify-between">
                <a href="/shop/earrings" class="lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-pink-550">
                    Return to Earrings
                </a>
                <button type="submit" class="lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-green-550 rounded-lg hover:bg-green-400 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">
                    Add to Bag
                </button>
            </div>
        </div>
    </div>

    <a class="py-4" href="/shop/earrings">
        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">You May Also Like</h5>
    </a>
    <div class="flex space-x-6">
        <?php for ($i = 0; $i < 4; $i++) : ?>
            <div class="mx-auto p-4">
                <div class="max-w-sm bg-white rounded-lg">
                    <a class="" href="/shop/earrings?pro_id=8hcjd9">
                        <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-64 rounded-lg " src="/../static/imgs/earrings/fancy-beads.jpg" alt="">
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