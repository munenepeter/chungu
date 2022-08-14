<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>


<main class="flex w-full bg-gray-200 shadow-inner ">
    <?php include_once 'sections/side-nav.view.php';?>

    <section id="" class="md:h-screen md:overflow-y-auto w-full md:overflow-x-hidden border-b">
        <div class="container px-5 py-6 mx-auto">
            <!-- <center>
                <a class="py-4" href="/shop/<?= $category_name ?>">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white"><?= ucfirst($category_name); ?></h5>
                </a>
            </center> -->
            <?php if (empty($products)) : ?>
                <h5 style="font-family: cursive;" class="text-center mt-22 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Oops, Seems there are no <?= $category_name ?> yet <br> Please come back later!</h5>

            <?php else : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 p-4">
                    <?php foreach ($products as $product) : ?>
                        <?php
                        $image = preg_replace('/\\\/', '/', "http://localhost:8989" . $product->image);
                        ?>
                        <div class="bg-white shadow-md hover:shadow-lg rounded-md mb-4">
                            <div class="p-2 flex justify-between items-center">
                                <div class="rounded-md 
                                <?= (strtolower($product->status) !== "available") ? 'bg-red-50 text-pink-550 ' : 'bg-green-50 text-green-550 ';?>
                                 text-sm  p-1"><?= ucfirst($product->status); ?></div>

                                <div class="flex justify-end items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer text-pink-550 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-4 cursor-pointer text-pink-550 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="image my-6 text-center relative">
                                <center>
                                    <img loading="lazy" class="rounded-lg transform transition duration-500 hover:scale-125 h-48 object-cover object-center" src="<?= (ENV === "development") ? $image : "../$product->image"; ?>" alt="" srcset="">
                                </center>
                            </div>

                            <div class="product-info text-center pb-2">
                                <a class="product-details-link" href="<?= $category_name ?>/<?= $product->id; ?>">
                                    <h3 class="text-xs text-green-550 "><?= strtoupper($category_name); ?></h3>
                                </a>
                                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-lg text-pink-550 font-bold"><?= $product->name; ?></p>
                                <p class="text-blue-500">
                                    <span>Ksh <?= number_format($product->price, 2); ?></span>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include_once 'sections/footer.view.php'; ?>