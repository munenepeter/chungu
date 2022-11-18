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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>

<body>

    <body class="bg-grey-100 px-3 font-sans leading-normal tracking-normal">
        <div class="container pt-8 mx-auto" x-data="loadProducts()" x-init="fetch('/api/all')
                    .then(response=> {
                        if (!response.ok) alert(`Something went wrong: ${response.status} - ${response.statusText}`)
                        return response.json()
                    })
                    .then(data => products = data)">
            <input x-ref="searchField" x-model="search" x-on:click="viewPage(0)" x-on:keydown.window.prevent.slash=" viewPage(0), $refs.searchField.focus()" placeholder="Search for an employee..." type="search" class="block w-full bg-gray-200 focus:outline-none focus:bg-white focus:shadow text-gray-700 font-bold rounded-lg px-4 py-3" />
            <div class="">
               
            
            <template x-for="item in filteredProducts" :key="item.id">


                    <tr class="hover:shadow-md hover:bg-green-50">
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                            <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                        </td>
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-md" :src="`${item.image}`" alt="" loading="lazy" />
                                </div>
                                <div class="ml-2">
                                    <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                        <span x-text="item.name"></span>
                                        <span>&#183;</span>
                                        <a class="text-blue-500 hover:text-blue-600" :href=" '/shop/' + item.category + '/'+ item.id"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                            </svg></a>

                                    </p>
                                    <span class="text-xs text-gray-400">Brand</span>
                                </div>
                            </div>


                        </td>
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">

                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" :src="`${item.category_image}`" alt="" loading="lazy" />
                                </div>
                                <div class="ml-2">
                                    <div class="text-sm leading-5 font-medium text-gray-900">
                                        <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                            <span  x-text="item.category"> </span>
                                            <span>&#183;</span>
                                            <a class="text-blue-500 hover:text-blue-600" :href=" '/shop/' + item.category"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                                </svg></a>

                                        </p>


                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 text-gray-500">
                           <span x-text="'$'+item.price"></span>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-green-200">
                            <span x-text="item.status" class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                
                            </span>
                        </td>
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                            <span class="text-xs font-medium" x-text="'Sold 0 of '+item.quantity" ></span>
                        </td>
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                            <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                <span> Peter </span>
                                <span>&#183;</span>
                                <span class="text-xs text-gray-600" x-text="item.updated_at" ></span>
                            </p>
                            <span class="text-xs text-gray-400">peter@chungu.co.ke</span>
                        </td>

                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 text-gray-500">
                            <p class="text-sm">Oct 12%</p>
                            <span class="text-xs text-gray-400">Expiring 25 Oct</span>
                        </td>
                        <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 font-medium">
                            <div class="flex items-center gap-2">
                                <!-- View product -->


                                <!-- Modal toggle -->
                                <div x-data="{read : false}">
                                    <svg @click="read = true" xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>



                                    <!-- Main modal -->
                                    <template x-if="read">
                                        <div style="background-color: rgba(0, 0, 0, .5)" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5 mx-auto">
                                                    <!-- Modal header -->
                                                    <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                        <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                            <h3 class="font-semibold " x-text="item.name">
                                                            </h3>

                                                            <img class="my-4 max-w-xs h-32" :src="`${item.image}`" alt="image description">

                                                            <p class="font-bold">
                                                                Ksh.00
                                                            </p>
                                                        </div>
                                                        <div>
                                                            <button @click="read = false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white">
                                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <dl>
                                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim minus earum non suscipit quos et minima velit assumenda, impedit nulla reiciendis, tempore distinctio. Quasi.</dd>
                                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Category</dt>
                                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Category </dd>
                                                    </dl>
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex items-center space-x-3 sm:space-x-4">
                                                            <button type="button" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="mr-1 -ml-1 w-5 h-5">
                                                                    <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                                                    <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                                                                </svg>

                                                                Preview
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                <!-- Update product -->
                                <div x-data="{update : false}">
                                    <!-- Modal toggle -->
                                    <svg @click="update = true" xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>


                                    <!-- Main modal -->
                                    <template x-if="update">
                                        <div style="background-color: rgba(0, 0, 0, .5)" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                    <!-- Modal header -->
                                                    <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                            Update Product ()
                                                        </h3>
                                                        <button @click="update = false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <form action="#">
                                                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                            <div>
                                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                                <input type="text" name="name" id="name" value="" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500" placeholder="Ex. Apple iMac 27&ldquo;">
                                                            </div>
                                                            <div>
                                                                <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                                <input type="text" name="brand" id="brand" value="" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500" placeholder="Ex. Apple">
                                                            </div>
                                                            <div>
                                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                                <input type="number" value="" name="price" id="price" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500" placeholder="$299">
                                                            </div>
                                                            <div>
                                                                <label for="category" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Category</label>
                                                                <input type="text" id="disabled-input" aria-label="disabled input" class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" disabled>

                                                            </div>
                                                            <div class="grid grid-cols-3 gap-2 sm:col-span-2">
                                                                <div>
                                                                    <label for="quantity" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Quantity</label>
                                                                    <input type="number" name="quantity" value="" id="quantity" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="5" required="">
                                                                </div>
                                                                <div>
                                                                    <label for="color" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Color</label>
                                                                    <select id="color" name="color" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                                        <?php if (!empty($colors)) : ?>
                                                                            <option>- Choose a color - </option>
                                                                            <?php foreach ($colors as $color) : ?>
                                                                                <option value="<?= $color; ?>"><?= ucwords($color); ?></option>
                                                                            <?php endforeach; ?>
                                                                        <?php else : ?>
                                                                            <option>- No Colors! - </option>
                                                                        <?php endif; ?>
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <label for="source" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Source</label>
                                                                    <input type="text" id="source" aria-label="disabled input" class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" disabled>

                                                                </div>
                                                            </div>
                                                            <div class="sm:col-span-2" x-data="showImage()">
                                                                <label for="description" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Image</label>
                                                                <label class="flex flex-col  items-center px-4 py-6 text-gray-900 bg-gray-50 rounded-lg shadow-lg tracking-wide border-2 border-dashed border-green-300 cursor-not-allowed">
                                                                    <svg id="helper-svg" class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                                    </svg>
                                                                    <img id="preview" class="hidden relative inset-0 w-full h-32 rounded-md object-center object-contain">
                                                                    <span id="helper" class="mt-2 text-sm text-gray-500 text-sm text-center">Click to upload
                                                                        <br>
                                                                        SVG, PNG, JPG or GIF (MAX. 800x400px)</span>
                                                                    <input name="image" type='file' class="hidden" accept="image/*" @change="showPreview(event)" required="" disabled />
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center space-x-4">
                                                            <button type="submit" style="background-color: #DE7B65;" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-800">
                                                                Update product
                                                            </button>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                <!--Delete Product  -->
                                <?php if (isAdmin()) : ?>
                                    <div x-data="{delete : false}">
                                    <!-- Modal toggle -->
                                    <svg @click="{delete : true}" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                        <!-- Main modal -->
                                        <template x-if="delete">
                                            <div style="background-color: rgba(0, 0, 0, .5)" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                        <button @click="delete = false" type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                                                        <div class="flex justify-center items-center space-x-4">
                                                            <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-green-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 ">
                                                                No, cancel
                                                            </button>
                                                            <form id="delete-product-form" action="product/delete?back=/<?= request_uri(); ?>" method="post">
                                                                <input type="hidden" name="id" value="">
                                                                <button id="delete-product-btn" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"> Yes, I'm sure</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>






                    <div class="flex items-center shadow hover:bg-indigo-100 hover:shadow-lg hover:rounded transition duration-150 ease-in-out transform hover:scale-105 p-3">
                        <img class="w-10 h-10 rounded-full mr-4" :src="`${item.image}`" />
                        <div class="text-sm">
                            <p class="text-gray-900 leading-none" x-text="item.name"></p>
                            <p class="text-gray-600" x-text="'$'+item.price"></p>
                        </div>
                    </div>
                </template>
            </div>

            <div class="w-full md:w-1/2 mx-auto py-6 flex justify-between items-center" x-show="pageCount() > 1">
                <!--First Button-->
                <button x-on:click="viewPage(0)" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="h-8 w-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="19 20 9 12 19 4 19 20"></polygon>
                        <line x1="5" y1="19" x2="5" y2="5"></line>
                    </svg>
                </button>

                <!--Previous Button-->
                <button x-on:click="prevPage" :disabled="pageNumber==0" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber==0 }">
                    <svg class="h-8 w-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>

                <!-- Display page numbers -->
                <template x-for="(page,index) in pages()" :key="index">
                    <button class="px-3 py-2 rounded" :class="{ 'bg-indigo-600 text-white font-bold' : index === pageNumber }" type="button" x-on:click="viewPage(index)">
                        <span x-text="index+1"></span>
                    </button>
                </template>

                <!--Next Button-->
                <button x-on:click="nextPage" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="h-8 w-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>

                <!--Last Button-->
                <button x-on:click="viewPage(Math.ceil(total/size)-1)" :disabled="pageNumber >= pageCount() -1" :class="{ 'disabled cursor-not-allowed text-gray-600' : pageNumber >= pageCount() -1 }">
                    <svg class="h-8 w-8 text-indigo-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="5 4 15 12 5 20 5 4"></polygon>
                        <line x1="19" y1="5" x2="19" y2="19"></line>
                    </svg>
                </button>
            </div>

            <div>
                <div class="mt-6 flex flex-wrap justify-between items-center text-sm leading-5 text-gray-700">
                    <div class="w-full sm:w-auto text-center sm:text-left" x-show="pageCount() > 1">
                        Page <span x-text="pageNumber+1"> </span> of
                        <span x-text="pageCount()"></span> | Showing
                        <span x-text="startResults()"></span> to
                        <span x-text="endResults()"></span>
                    </div>

                    <div class="w-full sm:w-auto text-center sm:text-right" x-show="total > 0">
                        Total <span class="font-bold" x-text="total"></span> results
                    </div>

                    <!--Message to display when no results-->
                    <div class="mx-auto flex items-center font-bold text-red-500" x-show="total===0">
                        <svg class="h-8 w-8 text-red-500" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="12" cy="12" r="9" />
                            <line x1="9" y1="10" x2="9.01" y2="10" />
                            <line x1="15" y1="10" x2="15.01" y2="10" />
                            <path d="M9.5 16a10 10 0 0 1 6 -1.5" />
                        </svg>

                        <span class="ml-4"> No results!!</span>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var sourceData = [];

            function loadProducts() {
                return {
                    search: "",
                    pageNumber: 0,
                    size: 10,
                    total: "",
                    products: [],

                    get filteredProducts() {
                        const start = this.pageNumber * this.size,
                            end = start + this.size;

                        if (this.search === "") {
                            this.total = this.products.length;
                            return this.products.slice(start, end);
                        }

                        //Return the total results of the filters
                        this.total = this.products.filter((item) => {
                            return item.employee_name
                                .toLowerCase()
                                .includes(this.search.toLowerCase());
                        }).length;

                        //Return the filtered data
                        return this.products
                            .filter((item) => {
                                return item.employee_name
                                    .toLowerCase()
                                    .includes(this.search.toLowerCase());
                            })
                            .slice(start, end);
                    },

                    //Create array of all pages (for loop to display page numbers)
                    pages() {
                        return Array.from({
                            length: Math.ceil(this.total / this.size),
                        });
                    },

                    //Next Page
                    nextPage() {
                        this.pageNumber++;
                    },

                    //Previous Page
                    prevPage() {
                        this.pageNumber--;
                    },

                    //Total number of pages
                    pageCount() {
                        return Math.ceil(this.total / this.size);
                    },

                    //Return the start range of the paginated results
                    startResults() {
                        return this.pageNumber * this.size + 1;
                    },

                    //Return the end range of the paginated results
                    endResults() {
                        let resultsOnPage = (this.pageNumber + 1) * this.size;

                        if (resultsOnPage <= this.total) {
                            return resultsOnPage;
                        }

                        return this.total;
                    },

                    //Link to navigate to page
                    viewPage(index) {
                        this.pageNumber = index;
                    },
                };
            }
        </script>
    </body>

</html>




































<div class="w-full h-screen bg-gray-100">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex flex-col">
            <div class="mb-4">
                <h1 class="text-3xl font-bolder leading-tight text-gray-900">Pages</h1>
            </div>
            <div class="-mb-2 py-4 flex flex-wrap flex-grow justify-between">
                <div class="flex items-center py-2">
                    <input class="bg-gray-200 appearance-none border-2 border-green-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-searcg" type="text" placeholder="Search">
                </div>
                <div class="flex items-center py-2">
                    <a href="" class="inline-block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline">
                        Create new page
                    </a>
                </div>
            </div>
            <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-green-200">
                    <table class="min-w-full">
                        <!-- HEAD start -->
                        <thead>
                            <tr class="border-b border-green-200 bg-white leading-4 tracking-wider text-base text-gray-900">
                                <th class="px-6 py-5 text-left" colspan="8">
                                    <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                                </th>
                                <th class="px-6 py-5 text-left">
                                    <span>All Items <?= count($products); ?></span>
                                </th>
                            </tr>
                            <tr class="bg-gray-50 border-b border-green-200 text-xs leading-4 text-gray-500 uppercase tracking-wider">
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
                                <tr class="hover:shadow-md hover:bg-green-50">
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                                        <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" type="checkbox" />
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-md" src="<?= $product->image; ?>" alt="" loading="lazy" />
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
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">

                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="<?= $product->categoryImage ?>" alt="" loading="lazy" />
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
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 text-gray-500">
                                        Ksh<?= $product->price; ?>.00
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-green-200">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <?= ucwords($product->status); ?>
                                        </span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                                        <span class="text-xs font-medium"><?= "Sold 2 of " . ($product->quantity); ?></span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                                        <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                            <span> Peter </span>
                                            <span>&#183;</span>
                                            <span class="text-xs text-gray-600"><?= time_ago($product->updated_at); ?></span>
                                        </p>
                                        <span class="text-xs text-gray-400">peter@chungu.co.ke</span>
                                    </td>

                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 text-gray-500">
                                        <p class="text-sm">Oct 12%</p>
                                        <span class="text-xs text-gray-400">Expiring 25 Oct</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 font-medium">
                                        <div class="flex items-center gap-2">
                                            <!-- View product -->


                                            <!-- Modal toggle -->
                                            <div x-data="{<?= 'read' . $product->id ?> : false}">
                                                <svg @click="<?= 'read' . $product->id ?> = true" xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>



                                                <!-- Main modal -->
                                                <template x-if="<?= 'read' . $product->id ?>">
                                                    <div style="background-color: rgba(0, 0, 0, .5)" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                        <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                                            <!-- Modal content -->
                                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5 mx-auto">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                                    <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                                        <h3 class="font-semibold ">
                                                                            <?= ucwords($product->name) ?>
                                                                        </h3>

                                                                        <img class="my-4 max-w-xs h-32" src="<?= $product->image ?>" alt="image description">

                                                                        <p class="font-bold">
                                                                            Ksh<?= $product->price ?>.00
                                                                        </p>
                                                                    </div>
                                                                    <div>
                                                                        <button @click="<?= 'read' . $product->id ?> = false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white">
                                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <dl>
                                                                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
                                                                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim minus earum non suscipit quos et minima velit assumenda, impedit nulla reiciendis, tempore distinctio. Quasi.</dd>
                                                                    <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Category</dt>
                                                                    <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400"> <?= ucwords($product->category) ?></dd>
                                                                </dl>
                                                                <div class="flex justify-between items-center">
                                                                    <div class="flex items-center space-x-3 sm:space-x-4">
                                                                        <button type="button" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="mr-1 -ml-1 w-5 h-5">
                                                                                <path fill-rule="evenodd" d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z" clip-rule="evenodd" />
                                                                                <path fill-rule="evenodd" d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z" clip-rule="evenodd" />
                                                                            </svg>

                                                                            Preview
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>

                                            <!-- Update product -->
                                            <div x-data="{<?= 'update' . $product->id ?> : false}">
                                                <!-- Modal toggle -->
                                                <svg @click="<?= 'update' . $product->id ?> = true" xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>


                                                <!-- Main modal -->
                                                <template x-if="<?= 'update' . $product->id ?>">
                                                    <div style="background-color: rgba(0, 0, 0, .5)" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                            <!-- Modal content -->
                                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                        Update Product (<?= ucwords($product->name) ?>)
                                                                    </h3>
                                                                    <button @click="<?= 'update' . $product->id ?> = false" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <form action="#">
                                                                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                        <div>
                                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                                            <input type="text" name="name" id="name" value="<?= ucwords($product->name); ?>" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500" placeholder="Ex. Apple iMac 27&ldquo;">
                                                                        </div>
                                                                        <div>
                                                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                                            <input type="text" name="brand" id="brand" value="<?= ucwords($product->brand); ?>" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500" placeholder="Ex. Apple">
                                                                        </div>
                                                                        <div>
                                                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                                            <input type="number" value="<?= $product->price; ?>" name="price" id="price" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500" placeholder="$299">
                                                                        </div>
                                                                        <div>
                                                                            <label for="category" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Category</label>
                                                                            <input type="text" id="disabled-input" aria-label="disabled input" class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="<?= ucwords($product->category); ?>" disabled>

                                                                        </div>
                                                                        <div class="grid grid-cols-3 gap-2 sm:col-span-2">
                                                                            <div>
                                                                                <label for="quantity" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Quantity</label>
                                                                                <input type="number" name="quantity" value="<?= $product->quantity; ?>" id="quantity" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="5" required="">
                                                                            </div>
                                                                            <div>
                                                                                <label for="color" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Color</label>
                                                                                <select id="color" name="color" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                                                    <?php if (!empty($colors)) : ?>
                                                                                        <option>- Choose a color - </option>
                                                                                        <?php foreach ($colors as $color) : ?>
                                                                                            <option value="<?= $color; ?>"><?= ucwords($color); ?></option>
                                                                                        <?php endforeach; ?>
                                                                                    <?php else : ?>
                                                                                        <option>- No Colors! - </option>
                                                                                    <?php endif; ?>
                                                                                </select>
                                                                            </div>
                                                                            <div>
                                                                                <label for="source" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Source</label>
                                                                                <input type="text" id="source" aria-label="disabled input" class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="<?= ucwords($product->source); ?>" disabled>

                                                                            </div>
                                                                        </div>
                                                                        <div class="sm:col-span-2" x-data="showImage()">
                                                                            <label for="description" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Image</label>
                                                                            <label class="flex flex-col  items-center px-4 py-6 text-gray-900 bg-gray-50 rounded-lg shadow-lg tracking-wide border-2 border-dashed border-green-300 cursor-not-allowed">
                                                                                <svg id="helper-svg" class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                                                </svg>
                                                                                <img id="preview" class="hidden relative inset-0 w-full h-32 rounded-md object-center object-contain">
                                                                                <span id="helper" class="mt-2 text-sm text-gray-500 text-sm text-center">Click to upload
                                                                                    <br>
                                                                                    SVG, PNG, JPG or GIF (MAX. 800x400px)</span>
                                                                                <input name="image" type='file' class="hidden" accept="image/*" @change="showPreview(event)" required="" disabled />
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex items-center space-x-4">
                                                                        <button type="submit" style="background-color: #DE7B65;" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-800">
                                                                            Update product
                                                                        </button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>

                                            <!--Delete Product  -->
                                            <?php if (isAdmin()) : ?>
                                                <div x-data="{<?= 'delete' . $product->id ?> : false}">
                                                    <!-- Modal toggle -->
                                                    <svg @click="<?= 'delete' . $product->id ?> = true" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    <!-- Main modal -->
                                                    <template x-if="<?= 'delete' . $product->id ?>">
                                                        <div style="background-color: rgba(0, 0, 0, .5)" class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                                <!-- Modal content -->
                                                                <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                                    <button @click="<?= 'delete' . $product->id ?> = false" type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                    <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                                                                    <div class="flex justify-center items-center space-x-4">
                                                                        <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-green-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                            No, cancel
                                                                        </button>
                                                                        <form id="delete-product-form" action="product/delete?back=/<?= request_uri(); ?>" method="post">
                                                                            <input type="hidden" name="id" value="<?= "$product->id"; ?>">
                                                                            <button id="delete-product-btn" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"> Yes, I'm sure</button>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            <?php endif; ?>
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


<script defer src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
<script>
    function showImage() {
        return {
            showPreview(event) {
                if (event.target.files.length > 0) {
                    var src = URL.createObjectURL(event.target.files[0]);
                    var preview = document.getElementById("preview");
                    document.getElementById("helper-svg").classList.add("hidden");
                    document.getElementById("helper").classList.add("hidden");
                    document.getElementById("preview").classList.remove("hidden");
                    preview.src = src;
                    preview.style.display = "block";
                }
            }
        }
    }
</script>
</body>

</html>