<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';

?>


<main class="flex w-full">
    <?php
    include_once 'sections/side-nav.view.php';

    ?>

    <section id="" class="md:h-screen md:overflow-y-auto w-full md:overflow-x-hidden border-b">
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/<?= $category_name ?>">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white"><?= ucfirst($category_name); ?></h5>
                </a>

            </center>
            <?php if (empty($products)) : ?>
                <h5 style="font-family: cursive;" class="text-center mt-22 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Oops, Seems there are no <?= $category_name ?> yet <br> Please come back later!</h5>

            <?php else : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                    <?php foreach ($products as $product) : ?>
                        <div class="p-4 w-full">
                            <div class="border p-2 shadow-sm bg-gray-50 rounded-md">
                                <a href="<?= $category_name ?>/<?= $product->id; ?>" class="block relative xl:h-72 h-56 rounded overflow-hidden">
                                    <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover w-full h-full block" src="../<?= $product->image; ?>">

                                </a>
                            </div>
                            <div class="mt-4">
                                <div class="flex justify-between items-center">

                                    <?php if (auth()) : ?>
                                        <input type="number" name="quantity" id="qty_<?= $product->id; ?>" class="text-center py-1 px-1 w-10 border-gray-300 text-pink-550 text-sm rounded-lg" required min="1" max="<?= $product->quantity ?>" :value="pax">
                                        <button style="background-color: #DE7B65;" class="bg-pink-550 py-1 px-2 focus:outline-none rounded" type="submit">Save Sale</button>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-550 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    <?php else : ?>
                                        <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1"><?= strtoupper($category_name); ?></h3>

                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-550 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>

                                    <?php endif; ?>
                                </div>
                                <?php if (!auth()) : ?>
                                    <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= $product->name; ?></h2>
                                    <p class="mt-1 text-pink-550">Ksh <?= number_format($product->price, 2); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>