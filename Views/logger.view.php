
<?php

dd($logs);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
</head>

<body class="h-full px-5 bg-gray-100 p-2 ">
    <div class="p-4">
        <div class="flex">
            <!-- Head -->
            <div class="flex flex-col">
                <h1 class="text-xl text-green-700 font-bold">View Logs</h1>
                <p class="text-sm text-gray-400">Back</p>
            </div>
            <!-- btns & search -->
            <div class="w-full">

                <div class="ml-auto w-full flex items-center justify-end">
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Debug
                        421</button>
                    <button type="button"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Info
                        2,162</button>
                    <button type="button"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Errors
                        651</button>
                    <button type="button"
                        class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 dark:focus:ring-yellow-900">Warnings
                        9,852</button>

                    <form class="">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search" required="">
                        </div>
                    </form>

                </div>


                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Level
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Time
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Env
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Description
                                </th>
                                <th scope="col" class="py-3 px-6 flex items-center">
                                    <span>Sort</span><span class="pl-2">Items</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                    </svg>
                                    <span
                                        class="pl-2 font-medium text-red-600 whitespace-nowrap dark:text-white">Error</span>
                                </th>
                                <td class="py-4 px-6">
                                    2022-08-24 14:16:53:53
                                </td>
                                <td class="py-4 px-6">
                                    production
                                </td>
                                <td class="py-4 px-6">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta qui aliquid quaerat
                                    architecto!
                                </td>
                                <td class="py-4 px-6">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">link to
                                        log</a>
                                </td>
                            </tr>
                        

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</body>

</html>