<div class="p-4 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
    <div class="flex space-x-4 overflow-x-auto shadow-1xl p-2">
        @for($i = 1; $i<9; $i++) <div class="w-32 md:w-32 bg-white  shadow-xl p-4 rounded-2xl">
            <div class="flex items-center">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-100">
                    <img class=" h-1/2 w-1/2" src="" alt="" srcset="">
                </span>
                <a href="/shop/"><span class="ml-2 text-sm font-medium text-pink-550"> <?= ucwords('name'); ?></span></a>
            </div>
            <span class="block text-4xl font-semibold mt-4 text-green-550"><?= 8 -  (10 - 4); ?><span class="ml-2 text-lg">left</span></span>
            <div class="flex text-xs mt-3 font-medium">
                <span class="text-green-500"><?= 10 - 4; ?></span>
                <span class="ml-1 text-pink-550"><span class="hidden md:inline-flex"> of </span><span class="md:hidden">/</span> </span>
                <span class="ml-1 text-green-500"><?= 10; ?></span>
                <span class="ml-1 text-pink-550">Sold</span>
            </div>
    </div>
    @endfor
</div>
</div>

<div class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
            <h3 class="ml-2 text-lg text-green-550 dark:text-gray-100 leading-7 font-semibold"><a href="https://laravel.com/docs">Most Viewed Categories</a></h3>
             <div class="ml-2">
            <div class="mt-2 text-sm">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-green-500 uppercase bg-green-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Products
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Views
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Trend
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class="text-xs"> Earrings</span>
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs"> 45</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs">1,235</span>
                                </td>
                                <td class="px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-600 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class="text-xs"> Rings</span>
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs">47</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs">8,235</span>
                                </td>
                                <td class="px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                                    </svg>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <a href="https://laravel.com/docs">
                <div class="mt-3 flex items-center text-sm font-semibold text-orange-550">
                    <div>View all categories</div>

                    <div class="ml-1 text-orange-550">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <h3 class="ml-2 text-lg text-green-550 dark:text-gray-100 leading-7 font-semibold"><a href="https://laracasts.com">Most Viewed Products</a></h3>
        <div class="ml-2">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Views
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Trend
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class="text-xs">Lovely Sunsets</span>
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs">Earrings</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs">1,235</span>
                                </td>
                                <td class="px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-blue-600 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l-6.75 6.75M12 4.5l6.75 6.75" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <span class="text-xs">Converse</span>
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs">Shoes</span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="text-xs">235</span>
                                </td>
                                <td class="px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l6.75-6.75M12 19.5l-6.75-6.75" />
                                    </svg>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <a href="https://laravel.com/docs">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700 dark:text-indigo-300">
                    <div>View all products</div>

                    <div class="ml-1 text-indigo-500 dark:text-indigo-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            <div class="ml-4 text-lg text-green-550 dark:text-gray-100 leading-7 font-semibold"><a href="https://tailwindcss.com/">Tailwind</a></div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Laravel Jetstream is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
            </svg>
            <div class="ml-4 text-lg text-green-550 dark:text-gray-100 leading-7 font-semibold">Authentication</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                Authentication and registration views are included with Laravel Jetstream, as well as support for user email verification and resetting forgotten passwords. So, you're free to get started what matters most: building your application.
            </div>
        </div>
    </div>
</div>