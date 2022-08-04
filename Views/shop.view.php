<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>


<main class="flex w-full shadow-inner">
    <section id="shopItems" class="shadow-md rounded-md bg-gray-50 md:h-fit md:overflow-y-auto body-font w-full">



        <?php if (empty($categories)) : ?>

        <?php else : ?>
            <div class="container px-5 py-6 mx-auto">

                <?php
                //dd(reset($categories)->image)
                ?>

                <div class="flex flex-col md:grid md:grid-cols-3 md:gap-4 p-5 space-y-4">
                    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg row-span-2">
                        <?php
                        $category = array_shift($categories);
                        ?>
                        <div class="flex">
                            <p><?= $category->name; ?></p>
                        <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-20 h-20 block" src="../<?= $category->image; ?>">
                        </div>
                        

                    </div>
                    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg">
                    <?php
                        $category = array_shift($categories);
                        ?>
                        <div class="flex">
                            <p><?= $category->name; ?></p>
                        <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-20 h-20 block" src="../<?= $category->image; ?>">
                        </div>

                    </div>
                    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg row-span-2">
                      <?php
                        $category = array_shift($categories);
                        ?>
                        <div class="flex">
                            <p><?= $category->name; ?></p>
                        <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-20 h-20 block" src="../<?= $category->image; ?>">
                        </div>

                    </div>
                    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg">
                    <?php
                        $category = array_shift($categories);
                        ?>
                        <div class="flex">
                            <p><?= $category->name; ?></p>
                        <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-20 h-20 block" src="../<?= $category->image; ?>">
                        </div>

                    </div>
                    <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg col-span-3"> <?php
                        $category = array_shift($categories);
                        ?>
                        <div class="flex">
                            <p><?= $category->name; ?></p>
                        <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-20 h-20 block" src="../<?= $category->image; ?>">
                        </div>

                    </div>

                </div>





                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 sm:p-4">

                    <!-- <div class="bg-white p-4 w-full shadow-sm rounded-md">
                            <a href="shop/earrings/<?= $earring->id; ?>" class="block relative h-64 rounded overflow-hidden">
                                <img loading="lazy" alt="Chungu Image" class="transform transition duration-500 hover:scale-125 object-cover  w-full h-full block" src="../<?= $earring->image; ?>">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-pink-550 text-xs tracking-widest title-font mb-1">EARRINGS</h3>
                                <h2 style="font-family: 'Cedarville Cursive', cursive;" class="text-green-550 title-font text-lg font-medium"><?= ucwords($earring->name); ?></h2>
                                <p class="mt-1 text-pink-550">Ksh<?= $earring->price; ?></p>
                            </div>
                        </div> -->

                </div>
            </div>
        <?php endif; ?>
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>