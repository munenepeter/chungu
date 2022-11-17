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
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">

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
                                        <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                            <div class="flex items-center gap-2">


                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>



                                                <!-- Update product -->
                                                <div>
                                                    <!-- Modal toggle -->
                                                    <svg id="updateButton<?=$product->id?>" data-modal-toggle="updateModal<?=$product->id?>" xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>


                                                    <!-- Main modal -->
                                                    <div id="updateModal<?=$product->id?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                            <!-- Modal content -->
                                                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                                <!-- Modal header -->
                                                                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                        Update Product (<?=ucwords($product->name)?>)
                                                                    </h3>
                                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateModal<?=$product->id?>">
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
                                                                            <input type="text" name="name" id="name" value="<?= ucwords($product->name);?>" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                                                                        </div>
                                                                        <div>
                                                                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                                            <input type="text" name="brand" id="brand" value="<?= ucwords($product->brand);?>" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                                                                        </div>
                                                                        <div>
                                                                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                                            <input type="number" value="<?= $product->price;?>" name="price" id="price" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-primary-500" placeholder="$299">
                                                                        </div>
                                                                        <div>
                                                                            <label for="category" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Category</label>
                                                                            <input type="text" id="disabled-input" aria-label="disabled input" class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="<?= ucwords($product->category);?>" disabled>

                                                                        </div>
                                                                        <div class="grid grid-cols-3 gap-2 sm:col-span-2">
                                                                            <div>
                                                                                <label for="quantity" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Quantity</label>
                                                                                <input type="number" name="quantity" value="<?= $product->quantity;?>" id="quantity" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="5" required="">
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
                                                                                <input type="text" id="source" aria-label="disabled input" class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="<?= ucwords($product->source);?>" disabled>

                                                                            </div>
                                                                        </div>
                                                                        <div class="sm:col-span-2" x-data="showImage()">
                                                                            <label for="description" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Image</label>
                                                                            <label class="flex flex-col  items-center px-4 py-6 text-gray-900 bg-gray-50 rounded-lg shadow-lg tracking-wide border-2 border-dashed border-green-300 cursor-pointer">
                                                                                <svg id="helper-svg" class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                                                </svg>
                                                                                <img id="preview" class="hidden relative inset-0 w-full h-32 rounded-md object-center object-contain">
                                                                                <span id="helper" class="mt-2 text-sm text-gray-500 text-sm text-center">Click to upload
                                                                                    <br>
                                                                                    SVG, PNG, JPG or GIF (MAX. 800x400px)</span>
                                                                                <input name="image" type='file' class="hidden" accept="image/*" @change="showPreview(event)" required="" />
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex items-center space-x-4">
                                                                        <button type="submit" style="background-color: #DE7B65;" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-green-800">
                                                                            Update product
                                                                        </button>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Delete Product  -->
                                                <?php if (isAdmin()) : ?>
                                                    <div>
                                                        <svg id="deleteButton<?=$product->id?>" data-modal-toggle="deleteModal<?=$product->id?>" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        <!-- Main modal -->
                                                        <div id="deleteModal<?=$product->id?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                                <!-- Modal content -->
                                                                <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                                    <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal<?=$product->id?>">
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
                                                                        <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
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


</body>

</html>