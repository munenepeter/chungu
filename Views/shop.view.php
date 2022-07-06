<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<main class="flex w-full">
    <?php include_once 'sections/side-nav.view.php'; ?>
    <section id="shopItems" class="shadow-md rounded-md bg-gray-50 md:h-fit md:overflow-y-auto body-font w-full">
        <?php if (empty($earrings)) : ?>
            <?php $msg = 1; ?>
            <?php if ($msg == 2) : ?>
                <center>
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mt-8 text-3xl font-black tracking-loose text-pink-550">No Earrings Currently</h5>
                </center>
            <?php endif; ?>
        <?php else : ?>
            <div class="container px-5 py-6 mx-auto">
                <center>
                    <a class="py-4" href="/shop/earrings">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                    </a>
                </center>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                    <?php foreach ($earrings as $earring) : ?>
                        <div class="bg-white p-4 w-full shadow-sm rounded-md">
                            <a href="shop/earrings/<?= $earring->id; ?>" class="block relative h-64 rounded overflow-hidden">
                                <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../<?= $earring->image; ?>">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">EARRINGS</h3>
                                <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= ucwords($earring->name); ?></h2>
                                <p class="mt-1 text-pink-550">Ksh<?= $earring->price; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (empty($necklaces)) : ?>
            <?php $msg += 1; ?>
            <?php if ($msg === 3) : ?>
            <center>
                <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mt-8 text-3xl font-black tracking-loose text-pink-550">No Necklaces Currently</h5>
            </center>
            <?php endif; ?>
        <?php else : ?>
            <div class="container px-5 py-6 mx-auto">
                <center>
                    <a class="py-4" href="/shop/necklaces">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
                    </a>
                </center>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                    <?php foreach ($necklaces as $necklace) : ?>
                        <div class="bg-white p-4 w-full shadow-sm rounded-md">
                            <a href="shop/necklaces/<?= $necklace->id; ?>" class="block relative h-64 rounded overflow-hidden">
                                <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../<?= $necklace->image; ?>">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">Necklaces</h3>
                                <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= ucwords($necklace->name); ?></h2>
                                <p class="mt-1 text-pink-550">Ksh<?= $necklace->price; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (empty($bracelets)) : ?>
            <?php $msg += 1; ?>
            <?php if ($msg == 2) : ?>
            <center>
                <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mt-8 text-3xl font-black tracking-loose text-pink-550">No Bracelets Currently</h5>
            </center>
            <?php endif; ?>
        <?php else : ?>
            <div class="container px-5 py-6 mx-auto">
                <center>
                    <a class="py-4" href="/shop/bracelets">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Braceletes</h5>
                    </a>
                </center>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                    <?php foreach ($bracelets as $bracelet) : ?>
                        <div class="bg-white p-4 w-full shadow-sm rounded-md">
                            <a href="shop/bracelets/<?= $bracelet->id; ?>" class="block relative h-64 rounded overflow-hidden">
                                <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../<?= $bracelet->image; ?>">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">Bracelets</h3>
                                <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= ucwords($bracelet->name); ?></h2>
                                <p class="mt-1 text-pink-550">Ksh<?= $bracelet->price; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (empty($anklets)) : ?>
            <?php $msg += 1; ?> 
            <?php if ($msg == 3) : ?>
            <center>
                <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mt-8 text-3xl font-black tracking-loose text-pink-550">No Anklets Currently</h5>
            </center>
            <?php endif; ?>
           
        <?php else : ?>
            <div class="container px-5 py-6 mx-auto">
                <center>
                    <a class="py-4" href="/shop/anklets">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Anklets</h5>
                    </a>
                </center>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                    <?php foreach ($anklets as $anklet) : ?>
                        <div class="bg-white p-4 w-full shadow-sm rounded-md">
                            <a href="shop/anklets/<?= $anklet->id; ?>" class="block relative h-64 rounded overflow-hidden">
                                <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../<?= $anklet->image; ?>">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">Anklets</h3>
                                <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= ucwords($anklet->name); ?></h2>
                                <p class="mt-1 text-pink-550">Ksh<?= $anklet->price; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($msg >= 3) : ?>
            <center>
                <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mt-8 text-3xl font-black tracking-loose text-pink-550">No Items Currently</h5>
            </center>
        <?php endif; ?> 
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>