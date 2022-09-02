<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';
?>


<main class="flex w-full bg-gray-200 shadow-inner ">
    <?php include_once 'sections/side-nav.view.php'; ?>

    <section id="" class="md:h-screen md:overflow-y-auto w-full md:overflow-x-hidden border-b">
        <div class="container px-5 py-6 mx-auto">
            <center>
                <a class="py-4" href="/shop/new-arrivals">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white"><?= ucfirst("New Arrivals"); ?></h5>
                </a>
            </center>
            <?php if (empty($products)) : ?>
                <h5 style="font-family: cursive;" class="text-center mt-22 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Oops, Seems there are no <?= $category->name; ?> yet <br> Please come back later!</h5>

            <?php else : ?>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 lg:gap-8 -m-4 p-4">
                    <?php foreach ($products as $product) : ?>
                        <?php
                        //  dd($_SESSION['liked_products']);
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

                                    <?php if (auth()) : ?>
                                        <div class="edit">
                                            <div class="rounded-md ml-4 cursor-pointer h-5 w-5">

                                                <svg data-tooltip-target="edit_product" data-tooltip-placement="top" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" text-green-550 h-full w-full">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>

                                            </div>


                                            <div id="edit_product" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-green-550 rounded-lg shadow-sm opacity-0 tooltip ">
                                                Edit
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                        <?php if (isAdmin()) : ?>
                                            <div x-data="{ open: false }">
                                                <a @click.prevent="open = true" href="delete?id=<?= "$product->id" ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                                <template x-if="open">
                                                    <div class="absolute top-20  left-0 w-full h-full flex items-center justify-center z-10" style="background-color: rgba(0,0,0,.5);">
                                                        <div class="text-left bg-green-50 h-auto p-2 md:max-w-xl md:p-2 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
                                                            <div class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                                <div class="sm:flex sm:items-start">
                                                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Delete <?= ucfirst($product->name); ?></h3>
                                                                        <div class="mt-2">
                                                                            <p class="text-sm text-gray-500">Are you sure you want to delete this product (<span class="font-medium "><?= ucfirst($product->name); ?></span>)? All of <span class="font-medium "><?= ucfirst("$product->name's"); ?></span> data will be permanently removed. This action cannot be undone!</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                    <form action="/-/product/delete?back=/<?=request_uri();?>" method="post">
                                                                        <input type="hidden" name="id" value="<?= "$product->id"; ?>">
                                                                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
                                                                    </form>
                                                                    <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                        <?php endif; ?>


                                        <div class="delete">
                                            <div class="rounded-md ml-4 cursor-pointer h-5 w-5">
                                                <svg data-tooltip-target="delete_product" data-tooltip-placement="top" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-500 h-full w-full">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>

                                            </div>


                                            <div id="delete_product" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-pink-550 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Delete
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="like">
                                            <div id="like_changed_<?= $product->id; ?>" onclick="likeProduct('<?= $product->id; ?>')" class="rounded-md ml-4 cursor-pointer 
                                        <?= is_in_Session($product->id, 'liked_products') ? 'bg-pink-550' : '' ?>
                                        h-5 w-5">
                                                <svg id="like_icon_<?= $product->id; ?>" data-tooltip-target="like_product" data-tooltip-placement="top" xmlns="http://www.w3.org/2000/svg" class="
                                            <?= is_in_Session($product->id, 'liked_products') ? 'text-white' : 'text-pink-550' ?>
                                            h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                                </svg>
                                            </div>


                                            <div id="like_product" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-pink-550 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                <?= is_in_Session($product->id, 'liked_products') ? 'Liked' : 'Like' ?>
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>



                                        <div class="cart">
                                            <div id="cart_changed_<?= $product->id; ?>" onclick="AddProductToCart('<?= $product->id; ?>')" class="rounded-md ml-4 cursor-pointer 
                                        <?= is_in_cart($product->id) ? 'bg-pink-550' : '' ?>
                                        h-5 w-5">
                                                <svg id="cart_icon_<?= $product->id; ?>" data-tooltip-target="add_to_bag" data-tooltip-placement="top" xmlns="http://www.w3.org/2000/svg" class="
                                            <?= is_in_cart($product->id) ? 'text-white' : 'text-pink-550' ?>
                                            h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                </svg>
                                            </div>
                                            <div id="add_to_bag" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-pink-550 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                                Add to Bag
                                                <div class="tooltip-arrow" data-popper-arrow></div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="image my-6 text-center">
                                <center>
                                    <a href="<?= $product->category ?>/<?= $product->id; ?>">
                                        <img loading="lazy" class="rounded-lg transform transition duration-500 hover:scale-125 h-48 object-cover object-center" src="<?= (ENV === "development") ? $image : "../$product->image"; ?>" alt="<?= $product->name . " Image"; ?>" srcset="">
                                    </a>
                                </center>
                            </div>

                            <div class="product-info text-center pb-2">
                                <a  href="<?= $product->category; ?>">
                                    <h3 class="text-xs text-green-550 "><?= strtoupper($product->category); ?></h3>
                                </a>
                                <a  href="<?= "$product->category/$product->id"; ?>">
                                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-lg text-pink-550 font-bold"><?= $product->name; ?></p>
                                </a>
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