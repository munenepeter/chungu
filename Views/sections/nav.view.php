<?php

use Chungu\Core\Mantle\Request;
?>
<nav class="sticky top-0 z-50 w-full bg-white border-gray-200 text-green-550">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="p-2 block hover:text-pink-550 ">
            <p style="font-family: 'Cedarville Cursive', cursive;" class="ml-2 hover:text-pink-550 text-4xl font-black dark:text-white">Chungu</p>
            <p class="text-lg font-bold whitespace-nowrap dark:text-white hover:text-pink-550">COLLECTIONS</p>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                    <a href="#" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>

                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonials</a>
                </li>
                <li>
                    <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="py-4 px-1 relative border-2 border-transparent text-gray-800 rounded-full hover:text-gray-400 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Cart">
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



                    <!-- Dropdown menu -->
                    <div id="dropdownDivider" class="z-10 hidden bg-white right-10 rounded shadow w-96 dark:bg-gray-700 dark:divide-gray-600">
                        <?php if (isset($_SESSION["cart_item"])) : ?>
                            <?php $item_total = 0;

                            echo '<table cellpadding="10" cellspacing="1">
        <tbody>
            <tr>
                <th><strong>Name</strong></th>
                <th><strong>Code</strong></th>
                <th><strong>Quantity</strong></th>
                <th><strong>Price</strong></th>
                <th><strong>Action</strong></th>
            </tr>';
                            ?>
                            <?php foreach ($_SESSION["cart_item"] as $item) : ?>


                                <tr>
                                    <td><strong><?= $item["name"]; ?></strong></td>
                                    <td><?= $item["code"]; ?></td>
                                    <td><?= $item["quantity"]; ?></td>
                                    <td align=right><?= $item["price"]; ?></td>
                                    <td><a onClick="cartAction('remove','<?= $item["code"]; ?>')" class="text-red-500">Remove Item</a></td>
                                </tr>

                                <?php $item_total += ($item["price"] * $item["quantity"]); ?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5" align=right><strong>Total:</strong>Ksh<?= $item_total; ?></td>
                            </tr>
                            </tbody>
                            </table>
                        <?php endif; ?>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <script>
                            function cartAction(action, product_code) {
                                var queryString = "";
                                if (action != "") {
                                    switch (action) {
                                        case "add":
                                            queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" + product_code).val();
                                            break;
                                        case "remove":
                                            queryString = 'action=' + action + '&code=' + product_code;
                                            break;
                                        case "empty":
                                            queryString = 'action=' + action;
                                            break;
                                    }
                                }
                                jQuery.ajax({
                                    url: '/shop',
                                    data: queryString,
                                    type: "POST",
                                    success: function(data) {
                                        $("#cart-item").html(data);
                                        if (action != "") {
                                            switch (action) {
                                                case "add":
                                                    $("#add_" + product_code).hide();
                                                    $("#added_" + product_code).show();
                                                    break;
                                                case "remove":
                                                    $("#add_" + product_code).show();
                                                    $("#added_" + product_code).hide();
                                                    break;
                                                case "empty":
                                                    $(".btnAddAction").show();
                                                    $(".btnAdded").hide();
                                                    break;
                                            }
                                        }
                                    },
                                    error: function() {}
                                });
                            }
                        </script>
                    </div>


                </li>

                <li>
                    <?php if (auth()) : ?>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" href="#" class="text-lg block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-green-900  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg></button>
                    <?php endif; ?>
                    <?php if (!auth()) : ?>
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown" href="#" class="text-lg block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-green-900  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg></button>
                    <?php endif; ?>
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 ">

                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 text-green-550" aria-labelledby="dropdownDefault">
                            <?php if (auth()) : ?>

                                <li>
                                    <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Earnings</a>
                                </li>
                                <li>
                                    <a href="/signout" class="block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Sign out</a>
                                </li>
                            <?php endif; ?>
                            <?php if (!auth()) : ?>
                                <li>
                                    <a href="/signin" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550 ">Sign in</a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</nav>