<?php

use Chungu\Core\Mantle\Request;
?>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-4 rounded dark:bg-gray-800 text-green-550">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="https://chungu.com" class="block hover:text-pink-550 ">
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
                     <?= Request::uri()==''? 'md:text-pink-550  md:hover:text-green-900':'';?>
                      md:p-0 dark:text-white">Home</a>
                </li>
                <li>
                    <a href="/shop" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0
                    <?= Request::uri()=='shop'? 'md:text-pink-550  md:hover:text-green-900':'hover:text-pink-550';?>
                     md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
                </li>
                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>

                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonials</a>
                </li>
                <li>
                    <a href="#" class="text-md block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-green-900  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg></a>
                </li>

                <li>
                    <a href="#" class="text-lg block py-2 pr-4 pl-3  hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-green-900  dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg></a>
                </li>
            </ul>
        </div>
    </div>
</nav>