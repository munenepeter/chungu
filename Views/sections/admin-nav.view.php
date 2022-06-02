<?php

use Chungu\Core\Mantle\Request;
use Chungu\Core\Mantle\Session;
?>
<nav class="sticky top-0 z-50 bg-white border-gray-200 px-2 sm:px-6 py-6 rounded dark:bg-gray-800 text-green-550 mb-4">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/dashboard" class="block hover:text-pink-550 ">
            <p class="text-lg font-bold whitespace-nowrap dark:text-white hover:text-pink-550">Dashboard</p>
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
                    <a href="/-/addearrings" class="text-md block py-2 pr-4 pl-3 rounded md:bg-transparent
                    <?= Request::uri() == '-/addearrings' ? 'md:text-pink-550  md:hover:text-green-900' : 'hover:text-pink-550'; ?>
                      md:p-0 dark:text-white">Earrings</a>
                </li>
                <li>
                    <a href="/-/addnecklaces" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0
                    <?= Request::uri() == '-/addnecklaces' ? 'md:text-pink-550  md:hover:text-green-900' : 'hover:text-pink-550'; ?>
                     md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Necklaces</a>
                </li>
                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Anklets</a>
                </li>

                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Bracelets</a>
                </li>

                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sales</a>
                </li>
                <li>
                    <?php if (auth()) : ?>
                        <a id="dropdownDefault" data-dropdown-toggle="dropdown" href="#" class="text-lg block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-green-900  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg></a>
                    <?php endif; ?>

                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-green-100 rounded shadow w-44 dark:bg-gray-700 ">
                        <?php if (auth()) : ?>
                            <div class="px-4 py-3 text-sm dark:text-white">
                                <div class="text-green-550 font-medium capitalize"><?= auth()->username; ?></div>
                                <div class="text-opacity-0 text-pink-550 text-xs truncate"><?= auth()->email;; ?></div>
                            </div>
                        <?php endif; ?>
                        <!-- Dropdown menu -->
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 text-green-550" aria-labelledby="dropdownDefault">
                            <?php if (auth()) : ?>
                                <li>
                                    <a href="/dashboard" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Earnings</a>
                                </li>
                                <?php if (isAdmin()) : ?>
                                    <li>
                                        <a href="/-/adduser" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Add User</a>
                                    </li>
                                <?php endif; ?>
                                <li>
                                    <a href="/signout" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Sign out</a>
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