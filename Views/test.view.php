<?php

use Chungu\Core\Mantle\Paginator; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="w-full h-screen bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="mb-4">
                    <h1 class="text-3xl font-bolder leading-tight text-gray-900">Pages</h1>
                </div>
                <div class="-mb-2 py-4 flex flex-wrap flex-grow justify-between">
                    <div class="flex items-center py-2">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-searcg" type="text" placeholder="Search">
                    </div>
                    <div class="flex items-center py-2">
                        <a href="" class="inline-block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
                            Create new page
                        </a>
                    </div>
                </div>
                <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-gray-200">
                        <table class="min-w-full">
                            <!-- HEAD start -->
                            <thead>
                                <tr class="border-b border-gray-200 bg-white leading-4 tracking-wider text-base text-gray-900">
                                    <th class="px-6 py-5 text-left" colspan="8">
                                        <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                                    </th>
                                    <th class="px-6 py-5 text-left">
                                        <span>All Items <?= count($products); ?></span>
                                    </th>
                                </tr>
                                <tr class="bg-gray-50 border-b border-gray-200 text-xs leading-4 text-gray-500 uppercase tracking-wider">
                                    <th class="px-6 py-3 text-left font-medium">
                                        <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Product Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Category
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Price
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Sales
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Edited by
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Offer
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                    </th>
                                </tr>
                            </thead>
                            <!-- HEAD end -->
                            <!-- BODY start -->
                            <tbody class="bg-white">

                                <?php foreach (Paginator::paginate($products, 10) as $product) : ?>
                                    <tr class="hover:shadow-md">
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                                        </td>
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-md" src="<?= $product->image; ?>" alt="" />
                                                </div>
                                                <div class="ml-2">
                                                    <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                                        <span> <?= ucwords($product->name); ?> </span>
                                                        <span>&#183;</span>
                                                        <a class="text-blue-500 hover:text-blue-600" href="/shop/<?= $product->category . '/' . $product->id ?>"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                                            </svg></a>

                                                    </p>
                                                    <span class="text-xs text-gray-400">Brand</span>
                                                </div>
                                            </div>


                                        </td>
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">

                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="<?= $product->categoryImage ?>" alt="" />
                                                </div>
                                                <div class="ml-2">
                                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                                        <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                                            <span> <?= ucwords($product->category); ?> </span>
                                                            <span>&#183;</span>
                                                            <a class="text-blue-500 hover:text-blue-600" href="/shop/<?= $product->category; ?>"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                                                </svg></a>

                                                        </p>


                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                            Ksh <?= $product->price; ?>.00
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                <?= ucwords($product->status); ?>
                                            </span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <span class="text-xs font-medium"><?= "Sold 2 of " . ($product->quantity); ?></span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                                <span> Peter </span>
                                                <span>&#183;</span>
                                                <span class="text-xs text-gray-600"><?= time_ago($product->updated_at); ?></span>
                                            </p>
                                            <span class="text-xs text-gray-400">peter@chungu.co.ke</span>
                                        </td>

                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                            <p class="text-sm">Oct 12%</p>
                                            <span class="text-xs text-gray-400">Expiring 25 Oct</span>
                                        </td>
                                        <td class="px-4 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                            <div class="flex items-center gap-2">


                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hover:text-purple-600 text-purple-400 w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 14.25l6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185zM9.75 9h.008v.008H9.75V9zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm4.125 4.5h.008v.008h-.008V13.5zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                                <svg id="deleteButton" data-modal-toggle="deleteModal" xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                            <!-- BODY end -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>