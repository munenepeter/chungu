<?php


use Chungu\Core\Mantle\Paginator;

include_once  'base.view.php';
include_once 'sections/admin-nav.view.php';
$colors = ['red','orange','green','gold','white','blue','yellow','brown','pink','purple','indigo']
?>


<div class="container mx-auto p-4 rounded-xl border border-gray-50 overflow-x-auto">
    <div class="flex justify-between items-center bg-green-50 p-2 rounded-md">
        <h2 class="font-semibold text-gray-600 font-bold tracking-wide">Products</h2>


        <div class="inline-flex rounded-md shadow-sm" role="group">
            <!-- Modal toggle -->
            <button id="defaultModalButton" data-modal-toggle="defaultModal" class="py-2 px-4 text-sm font-medium text-green-900 bg-transparent rounded-l-lg border border-green-900 hover:bg-green-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white ">
                Add Product
            </button>

            <!-- Main modal -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-pink-550 dark:text-white">
                                Add Product
                            </h3>
                            <button type="button" class="text-pink-550 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
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
                                    <label for="name" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500" placeholder="Type product name" required="">
                                </div>
                                <div>
                                    <label for="category" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Category</label>
                                    <select id="category" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500">
                                        <?php if (!empty($categories)) : ?>
                                            <option>- Choose a category - </option>
                                            <?php foreach ($categories as $category) : ?>
                                                <option value="<?= $category->name; ?>"><?= ucwords($category->name); ?></option>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <option>- No Categories! - </option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <div>
                                    <label for="brand" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Brand</label>
                                    <input type="text" name="brand" id="brand" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500" placeholder="Product brand" required="">
                                </div>
                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500" placeholder="$2999" required="">
                                </div>
                                <div class="grid grid-cols-3 gap-2 sm:col-span-2">
                                    <div>
                                        <label for="price" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Quantity</label>
                                        <input type="number" name="price" id="price" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500" placeholder="5" required="">
                                    </div>
                                    <div>
                                        <label for="color" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Color</label>
                                        <select id="color" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500">
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
                                        <label for="color" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product Source</label>
                                        <select id="color" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-green-500">
                                        <?php if (!empty($sources)) : ?>
                                            <option>- Choose a source - </option>
                                            <?php foreach ($sources as $source) : ?>
                                                <option value="<?= $source; ?>"><?= ucwords($source); ?></option>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <option>- No sources! - </option>
                                        <?php endif; ?>
                                    </select>
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
                                        <input type='file' class="hidden" accept="image/*" @change="showPreview(event)" required="" />
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="text-white inline-flex items-center bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                </svg>
                                Add new product
                            </button>
                        </form>
                    </div>
                </div>
            </div>






            <a class="py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-r-md border border-green-900 hover:bg-green-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white ">
                Export Products
            </a>
        </div>
    </div>
    <div class="bg-white inline-block min-w-full shadow-md rounded-lg overflow-hidden">
        <table class="w-full table-collapse">
            <thead class="bg-pink-550 w-full">
                <tr>
                    <th class="text-sm text-left uppercase font-semibold p-3 ">Product</th>
                    <th class="text-sm text-left uppercase font-semibold p-3 ">Category</th>
                    <th class="hidden md:inline-flex text-sm text-left uppercase font-semibold  p-3 ">Price</th>
                    <th class="text-sm text-left uppercase font-semibold p-3  text-center">Quantity</th>
                    <th class="text-sm text-left uppercase font-semibold p-3  text-center">Color</th>
                    <th class="hidden md:inline-flex md:ml-28 text-sm uppercase font-semibold p-3 text-center">Status</th>
                    <th class="hidden md:inline-flex md:ml-16 text-sm uppercase font-semibold p-3 text-center">Modified</th>
                    <th class="text-sm uppercase font-semibold md:ml-16 p-3 "><span class="md:hidden">Actions</span></th>
                </tr>
            </thead>
            <tbody class="align-baseline">
                <?php if (!empty($products)) : ?>
                    <?php foreach (Paginator::paginate($products, 7) as $product) : ?>
                        <tr class="group cursor-pointer hover:bg-green-50 border-b border-grey-light">
                            <td class="text-sm p-3 whitespace-no-wrap"><?= ucwords($product->name); ?></td>
                            <td class="text-sm p-3 whitespace-no-wrap"><?= ucwords($product->category); ?></td>
                            <td class="hidden md:inline-flex text-sm p-3 whitespace-no-wrap">Ksh <?= $product->price; ?></td>
                            <td class="text-sm p-3 whitespace-no-wrap text-center"><?= $product->quantity; ?></td>
                            <td class="text-sm p-3 whitespace-no-wrap text-center"><?= ucwords($product->color); ?></td>
                            <td class="hidden md:inline-flex md:ml-28 text-sm p-3 whitespace-no-wrap text-center"><?= ucwords($product->status); ?></td>
                            <td class="hidden md:inline-flex md:ml-16 text-sm p-3 whitespace-no-wrap text-center"><?= time_ago($product->updated_at); ?></td>
                            <td class="text-sm p-3 whitespace-no-wrap text-sm group-hover:visible">
                                <div class="md:text-base text-gray-800 flex items-center gap-2">
                                    <div x-data="{ open: false }">
                                        <a @click.prevent="open = true">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>

                                        <template x-if="open">
                                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);">
                                                <div class="text-left bg-green-50 h-auto p-2 md:max-w-xl md:p-4 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">

                                                    <div class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                        <div class="bg-cover h-32" style="background-image: url('https://images.unsplash.com/photo-1522093537031-3ee69e6b1746?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=a634781c01d2dd529412c2d1e2224ec0&auto=format&fit=crop&w=2098&q=80');"></div>
                                                        <div class="border-b px-4 pb-6 my-2">
                                                            <div class="text-center sm:text-left sm:flex mb-4">
                                                                <img loading="lazy" class="h-32 w-32 rounded-full border-4 border-white -mt-16 mr-4" src="../<?= $product->image; ?>" alt="">
                                                                <div class="py-2">
                                                                    <h3 class="font-bold text-2xl mb-4 text-gray-500 "><?= ucfirst($product->name); ?></h3>
                                                                    <div class="space-y-2">
                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                            </svg>
                                                                            <span class="font-medium text-gray-500 "><?= ucfirst($product->status); ?></span>
                                                                        </div>
                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                                            </svg>
                                                                            <span class="font-medium text-gray-500 "><?= ucfirst($product->name); ?></span>
                                                                        </div>
                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                            </svg>
                                                                            <span class="text-blue-700 hover:underline dark:text-blue-500"><?= $product->price; ?></span>
                                                                        </div>
                                                                        <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                            </svg>
                                                                            <span class="text-sm font-medium text-gray-500 ">Added <?= date("jS M Y h:i:s"); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="sm:px-6 sm:flex sm:flex-row-reverse">

                                                            <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-green-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <!-- edit product -->
                                    <div x-data="{ open: false }">
                                        <a @click.prevent="open = true">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <template x-if="open">
                                            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center " style="background-color: rgba(0,0,0,.5);">
                                                <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded-lg bg-green-50  mx-2 md:mx-0" @click.away="open = false">
                                                    <h2 class="text-2xl text-green-500">Editing <?= " $product->name"; ?></h2>
                                                    <form action="products/update?back=/<?= request_uri(); ?>" method="post" class="border bg-white p-4 my-2 max-w-md rounded-lg">

                                                        <div class="flex space-x-4">
                                                            <div class="mb-6 w-full">
                                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Product Name</label>
                                                                <input type="text" id="name" name="name" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5     " value="<?= " $product->name"; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="flex space-x-4">
                                                            <div class="mb-6">
                                                                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 ">Quantity</label>
                                                                <input type="text" id="quantity" name="quantity" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5     " value="<?= " $product->quantity"; ?>" required>
                                                            </div>
                                                            <div class="mb-6">
                                                                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Price</label>
                                                                <input type="price" id="price" name="price" class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5     " value="<?= " $product->price"; ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="flex space-x-4 w-full">
                                                            <div class="mb-6 w-1/2">
                                                                <label for="color" class="block mb-2 text-sm font-medium text-gray-900 ">Color</label>
                                                                <select name="color" class="block appearance-none bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 " required>
                                                                    <option class="text-gray-900 text-sm rounded-lg"><?= ucfirst($product->color); ?></option>
                                                                    <option class="text-gray-900 text-sm rounded-lg" value="gold">Gold</option>
                                                                    <option class="text-gray-900 text-sm rounded-lg" value="silver">Silver</option>
                                                                    <option class="text-gray-900 text-sm rounded-lg" value="both">Both</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-6 w-1/2">
                                                                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 ">Status</label>
                                                                <select name="status" class="block appearance-none bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-green-500 block w-full p-2.5 " required>
                                                                    <option class="text-gray-900 text-sm rounded-lg"><?= ucwords($product->status); ?></option>
                                                                    <option class="text-gray-900 text-sm rounded-lg" value="available">Available</option>
                                                                    <option class="text-gray-900 text-sm rounded-lg" value="out of stock">Out of Stock</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id" value="<?= " $product->id"; ?>">
                                                        <div class="bg-green-50  sm:px-6 sm:flex sm:flex-row-reverse">
                                                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                                                            <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-green-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                        </div>
                                                    </form>


                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                    <!-- Delete product -->
                                    <?php if (isAdmin()) : ?>
                                        <div x-data="{ open: false }">
                                            <a @click.prevent="open = true" href="deleteuser?user_id<?= "$product->name" ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                            <template x-if="open">
                                                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);">
                                                    <div class="text-left bg-green-50 h-auto p-2 md:max-w-xl md:p-2 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
                                                        <div class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                            <div class="sm:flex sm:items-start">
                                                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Delete <?= ucfirst($product->name); ?></h3>
                                                                    <div class="mt-2">
                                                                        <p class="text-sm text-gray-500">Are you sure you want to delete this user (<span class="font-medium "><?= ucfirst($product->name); ?></span>)? All of <span class="font-medium "><?= ucfirst("$product->name's"); ?></span> data will be permanently removed. This action cannot be undone!</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                <form action="product/delete?back=/<?= request_uri(); ?>" method="post">
                                                                    <input type="hidden" name="id" value="<?= "$product->id"; ?>">
                                                                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Delete</button>
                                                                </form>
                                                                <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-green-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
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
                <?php else : ?>
                    <tr class="group cursor-pointer hover:bg-green-50">
                        <td colspan="5" class=" text-center text-sm p-3  whitespace-no-wrap">
                            <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                Looks like there are no products, <a class="text-sm text-green-550 tracking-wide hover:underline">Add </a> or come back when they have been added</h2>
                        </td>
                    </tr>

                <?php endif; ?>
            </tbody>
        </table>
        <?php if (!empty($products)) : ?>
            <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm leading-5 text-gray-700">
                            Showing
                            <span class="font-medium"><?= Paginator::$start; ?></span>
                            to
                            <span class="font-medium"><?= Paginator::$end; ?></span>
                            of
                            <span class="font-medium"><?= count($products) ?></span>
                            results
                        </p>
                    </div>
                    <div>
                        <span class="relative z-0 inline-flex shadow-sm">
                            <?php Paginator::showLinks($products); ?>
                        </span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

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