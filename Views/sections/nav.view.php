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
                    <?= str_contains(Request::uri(), 'shop') ? 'md:text-pink-550  md:hover:text-green-900' : 'hover:text-pink-550'; ?>
                     md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                </li>
                <li>
                    <a href="/#about" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>

                <li>
                    <a href="/#testimonials" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonials</a>
                </li>
    
                <li>

                    <div x-data="getCart()" x-init="init()">
                        <button @click.prevent="openbag = true" class="py-4 px-1 relative border-2 border-transparent text-gray-800 rounded-full hover:text-gray-400 focus:outline-none focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Cart">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-green-550 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
    
                                <span class="absolute inset-0 object-right-top -mr-6">
                                    <div id="cart-count" class="inline-flex items-center px-1 py-0.5 border-2 border-white rounded-full text-xs font-semibold leading-4 bg-red-500 text-white">

                                    </div>
                                </span>
                            
                        </button>


                        <template x-if="openbag">
                            <div class="absolute inset-0 overflow-hidden">
                                <div class="pointer-events-none fixed inset-y-0 top-20 right-0 flex max-w-full pl-10">
                                    <div class="pointer-events-auto w-screen max-w-md">
                                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                                            <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                                                <div class="flex items-start justify-between">
                                                    <h2 class="text-lg font-medium text-pink-5500" id="slide-over-title" x-text="title">Shopping cart</h2>
                                                    <div class="ml-3 flex h-7 items-center">
                                                        <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                                            <span class="sr-only">Close panel</span>
                                                            <svg @click.prevent="openbag = false" class="text-red-500 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="mt-8">
                                                    <div class="flow-root">
                                                        <ul role="list" class="-my-6 divide-y divide-gray-200">

                                                            <template x-for="product in products" :key="product.id">

                                                                <li class="flex py-6">
                                                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                                        <img x-bind:src="'<?php "../../"; ?>' + product.image" alt="" class="h-full w-full object-cover object-center">
                                                                    </div>

                                                                    <div class="ml-4 flex flex-1 flex-col">
                                                                        <div>
                                                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                                                <h3>
                                                                                    <a style="font-family: 'Cedarville Cursive', cursive;" class="text-pink-550" href="#" x-text="product.name"> </a>
                                                                                </h3>
                                                                                <p class="text-blue-500 ml-4" x-text="'Ksh'+product.price*1+'.00'"></p>
                                                                            </div>
                                                                            <p class="mt-1 text-sm text-gray-500">Category</p>
                                                                        </div>
                                                                        <div class="flex flex-1 items-end justify-between text-sm">
                                                                            <p class="text-gray-500" x-text="'Qty '+ 1">Qty </p>

                                                                            <div class="flex">
                                                                                <button @click="remove(product.id)" type="button" class="font-medium text-red-600 hover:text-red-500">Remove</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </template>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="border-t border-gray-200 py-6 px-4 sm:px-6 bg-gray-100">
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <p>Subtotal</p>
                                                    <p x-text="'Ksh'+totals+'.00'"></p>
                                                </div>
                                                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                                                <div class="mt-6">
                                                    <a style="background-color: #DE7B65;" href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                                                </div>
                                                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                                    <p>
                                                        or <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></button>
                                                    </p>
                                                </div>
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