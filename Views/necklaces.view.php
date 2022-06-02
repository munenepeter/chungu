<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>



<main class="flex w-full">
    <?php
    include_once 'sections/side-nav.view.php'; ?>

    <section id="necklaces" class="md:h-screen md:overflow-y-auto w-full md:overflow-x-hidden">
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/necklaces">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
                </a>
            </center>
            <?php if (empty($earrings)) : ?>
                <h5 style="font-family: cursive;" class="text-center mt-22 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Oops, Seems there are no earrings yet <br> Please come back later!</h5>

            <?php else : ?>
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
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>