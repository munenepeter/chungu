<?php

use Chungu\Core\Mantle\Request;
?>
<nav class="relative sticky top-0 z-10 w-full bg-white border-gray-200 text-green-550">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="p-2 block hover:text-pink-550 ">
            <p style="font-family: 'Cedarville Cursive', cursive;" class="ml-2 hover:text-pink-550 text-4xl font-black dark:text-white">Chungu</p>
            <p class="text-lg font-bold whitespace-nowrap dark:text-white hover:text-pink-550">COLLECTIONS</p>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="text-green-550 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <svg class="text-green-550 hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium items-center">
                <li>
                    <a href="/" class="text-md block py-2 pr-4 pl-3 rounded md:bg-transparent
                     <?= Request::uri() == '' ? 'md:text-pink-550  md:hover:text-green-900' : ''; ?>
                      md:p-0 dark:text-white">Home</a>
                </li>
                <li>
                    <a href="/shop" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0
                    <?= Request::uri() == 'shop' ? 'md:text-pink-550  md:hover:text-green-900' : 'hover:text-pink-550'; ?>
                     md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                </li>
                <li>
                    <a href="/#about" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>

                <li>
                    <a href="/#testimonials" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonials</a>
                </li>
                <li>

                    <div x-data="{ open: false }">

                        <button @click.prevent="open = true" class="py-4 px-1 relative border-2 border-transparent text-gray-800 rounded-full hover:text-gray-400 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Cart">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-green-550 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <?php if (!empty(session_get('cart_item')) || session_get('cart_item') !== null) : ?>
                                <span class="hidden absolute inset-0 object-right-top -mr-6">
                                    <div id="cart-count" class="inline-flex items-center px-1 py-0.5 border-2 border-white rounded-full text-xs font-semibold leading-4 bg-red-500 text-white">

                                        <?= count(session_get('cart_item')); ?>

                                    </div>
                                </span>
                            <?php endif; ?>
                        </button>

                        <template x-if="open">
                            <div class="mt-12" style="background-color: rgba(0,0,0,.5);">
                                <div class="absolute  top-12 right-3  w-1/2 h-full">
                                    <div class="text-left" @click.away="open = false">
                                        <div class="border bg-green-50 p-2 my-2 rounded-lg">
                                            <div class="rounded-lg bg-white w-full h-full border-b px-2 pb-6 my-2">
                                                <div class="py-4">
                                                    <div>
                                                        <h2 class="text-2xl font-semibold leading-tight">Shopping Bag</h2>
                                                    </div>
                                                    <div class="py-2 overflow-y-auto">
                                                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-y-auto">
                                                            <?php if (isset($_SESSION["cart_item"])) : ?>
                                                                <?php $item_total = 0;

                                                                echo ' <table class="min-w-full leading-normal">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                                                Product
                                                                            </th>
                                                                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                                                Quantity
                                                                            </th>
                                                                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                                                                Amount
                                                                            </th>
                                                                            
                                                                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                                                                        </tr>
                                                                    </thead><tbody>';
                                                                ?>
                                                                <?php foreach ($_SESSION["cart_item"] as $item) : ?>

                                                                    <tr id="row_<?= $item["id"]; ?>">
                                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                            <div class="flex">
                                                                                <div class="flex-shrink-0 w-10 h-10">
                                                                                    <img class="w-full h-full rounded-md" src="<?php asset("../../" . $item["image"]); ?>" alt="" />
                                                                                </div>
                                                                                <div class="ml-3">
                                                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                                                        <?= $item["name"]; ?>
                                                                                    </p>
                                                                                    <p class="text-gray-600 whitespace-no-wrap"><?= $item["id"]; ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                            <p class="text-gray-900 whitespace-no-wrap"><?= $item["quantity"]; ?></p>
                                                                        </td>

                                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                            <p class="text-gray-900 whitespace-no-wrap">Ksh <?= $item["price"]; ?></p>
                                                                        </td>

                                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                                            <button onClick="cartAction('remove','<?= $item["id"]; ?>')" type="button" class="inline-block text-gray-500 hover:text-gray-700">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                                </svg>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                    <?php $item_total += ($item["price"] * $item["quantity"]); ?>
                                                                <?php endforeach; ?>
                                                                <tr>
                                                                    <td colspan="4" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right" align=right><strong>Total: </strong>Ksh <?= $item_total; ?></td>
                                                                </tr>
                                                                </tbody>
                                                                </table>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="sm:px-6 sm:flex sm:flex-row-reverse">
                                                <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>



                </li>

                <li>
                    <?php if (auth()) : ?>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" href="#" class="text-lg block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 "><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg></button>
                    <?php endif; ?>
                    <?php if (!auth()) : ?>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" href="#" class="text-lg block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 "><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg></button>
                    <?php endif; ?>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 ">

                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 text-green-550" aria-labelledby="dropdownDefault">
                            <?php if (auth()) : ?>

                                <li>
                                    <a href="/dashboard" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Earnings</a>
                                </li>
                                <li>
                                    <a href="/signout" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Sign out</a>
                                </li>
                            <?php endif; ?>
                            <?php if (!auth()) : ?>
                                <li>
                                    <a href="/signin" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550 ">Admin Sign in</a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</nav>