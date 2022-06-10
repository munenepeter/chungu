<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>



<main class="flex w-full">
<?php
include_once 'sections/side-nav.view.php';?>

    <section id="Earrings" class="md:h-screen md:overflow-y-auto w-full md:overflow-x-hidden border-b">
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/earrings">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                </a>
            </center>
            <?php if (empty($earrings )) : ?>
                <h5 style="font-family: cursive;" class="text-center mt-22 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Oops, Seems there are no earrings yet <br> Please come back later!</h5>

            <?php else: ?>
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">
                <?php foreach ($earrings as $earring) : ?>
                    <div class="p-4 w-full">
                        <a href="earrings/<?= $earring->id; ?>" class="block relative xl:h-72 h-56 rounded overflow-hidden">
                            <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover w-full h-full block" src="../<?= $earring->image; ?>">
                        </a>
                        <div class="mt-4">
                            <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">EARRINGS</h3>
                            <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= $earring->name; ?></h2>
                            <p class="mt-1 text-pink-550"><?= $earring->price; ?></p>
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