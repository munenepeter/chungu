<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';

//dd($products);
?>


<main class="flex w-full bg-gray-200 shadow-inner ">
    <?php include_once 'sections/side-nav.view.php'; ?>

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
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 p-4">
                    <?php foreach ($products as $product) : ?>
                        <?php

                        $image = preg_replace('/\\\/', '/', "http://localhost:8989" . $product->image);
                        ?>
                        <div class="bg-white shadow-md hover:shadow-lg rounded-md mb-4">
                            <div class="p-2 flex justify-between items-center">
                                <div class="rounded-md 
                                <?= (strtolower($product->status) !== "available") ? 'bg-red-50 text-pink-550 ' : 'bg-green-50 text-green-550 '; ?>
                                 text-sm  p-1">

                                    <?php if (auth()) : ?>
                                        <?php if ((strtolower($product->status) !== "available")) : ?>
                                            <span class="text-red-500">
                                                Sold Out
                                            </span>
                                        <?php else : ?>
                                            <span class="text-green-500">
                                                <?= "Total: <b>{$product->quantity}</b>"; ?>
                                            </span>
                                        <?php endif; ?>
                                    <?php else : ?>
                                        <span><?= ucfirst($product->status); ?></span>
                                    <?php endif; ?>

                                </div>
                                <div class="flex justify-end items-center">
                                    <div class="like">
                                        <div id="changed_<?= $product->id; ?>" onclick="likeProduct('<?= $product->id; ?>')" class="rounded-md ml-4 cursor-pointer 
                                        <?= is_in_Session($product->id, 'liked_products') ? 'bg-pink-550' : ''?>
                                        h-5 w-5">
                                            <svg id="icon_<?= $product->id; ?>" data-tooltip-target="like_product" data-tooltip-placement="top" xmlns="http://www.w3.org/2000/svg" class="
                                            <?= is_in_Session($product->id, 'liked_products') ? 'text-white' : 'text-pink-550'?>
                                            h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                        </div>


                                        <div id="like_product" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-pink-550 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Like
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                    <div class="cart">
                                        <button class=" ml-4 cursor-pointer text-pink-550 h-5 w-5"><svg data-tooltip-target="add_to_bag" data-tooltip-placement="top" xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg></button>
                                        <div id="add_to_bag" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-pink-550 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                            Add to Bag
                                            <div class="tooltip-arrow" data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="image my-6 text-center relative">
                                <center>
                                    <a href="<?= $product->category ?>/<?= $product->id; ?>">
                                        <img loading="lazy" class="rounded-lg transform transition duration-500 hover:scale-125 h-48 object-cover object-center" src="<?= (ENV === "development") ? $image : "../$product->image"; ?>" alt="" srcset="">
                                    </a>
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



                        <!-- <div class="w-80 bg-white shadow rounded">
                            <div class="h-48 w-full bg-white flex flex-col justify-between p-4 bg-cover bg-center" style="background-image: url('<?= $image; ?>')">
                                <div class="flex justify-between">
                                    <input type="checkbox" />
                                    <button class="text-white hover:text-pink-550">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <span class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none">
                                        <?= $product->status; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="p-4 flex flex-col items-center">
                                <p class="text-gray-400 font-light text-xs text-center">
                                    <?= strtoupper($category_name); ?>
                                </p>
                                <h1 class="text-gray-800 text-center mt-1"><?= $product->name; ?></h1>
                                <p class="text-center text-gray-800 mt-1">Ksh <?= number_format($product->price, 2); ?></p>

                            </div>
                        </div> -->
                        <!-- <div class="p-4 w-full">
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
                        </div> -->
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include_once 'sections/footer.view.php'; ?>