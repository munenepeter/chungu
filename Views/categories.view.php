<?php

use Chungu\Models\Product;
use Chungu\Core\Mantle\Paginator;

include_once 'base.view.php';
include_once 'sections/admin-nav.view.php'
?>
<!-- yuyuyuyuyu -->
<main class="bg-green-50 -pt-4">
    <section class="px-4">
        <div class="flex justify-between items-center bg-green-50 p-4 rounded-md">
            <h2 class="font-semibold text-gray-600 font-bold tracking-wide">Categories</h2>
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <div>
                    <!-- Modal toggle -->
                    <button id="defaultModalButton" data-modal-toggle="defaultModal" class="py-2 px-4 text-sm font-medium text-green-900 bg-transparent rounded-l-lg border border-green-900 hover:bg-green-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white ">
                        Add Category
                    </button>


                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                <!-- Modal header -->
                                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-pink-550 dark:text-white">
                                        Add Category
                                    </h3>
                                    <button type="button" class="text-pink-550 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form id="create-product-form4" action="/-/categories?back=/<?= request_uri(); ?>" method="POST" enctype="multipart/form-data">
                                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                        <div>
                                            <label for="category" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Category Name</label>
                                            <input type="text" name="category" id="category" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Type category name" required="">
                                        </div>
                                        <div>
                                            <label for="source" class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Category Source</label>
                                            <select id="source" name="source" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                <?php if (!empty($sources)) : ?>
                                                    <option>- Choose a source - </option>
                                                    <?php foreach ($sources as $source) : ?>
                                                        <option value="<?= $source; ?>"><?= ucwords($source); ?></option>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <option value="N/A">- No sources! - </option>
                                                <?php endif; ?>
                                            </select>
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
                                    <button id="create-product-btn4" type="submit" style="background-color: #DE7B65;" class="text-white inline-flex items-center hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                        </svg>
                                        Add new category
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


                <div x-data="{ open_export_category: false }">
                    <button @click.prevent="open_export_category = true" type="button" class="py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-r-md border border-green-900 hover:bg-green-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white ">Export Categories</button>
                    <template x-if="open_export_category">
                        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center z-10" style="background-color: rgba(0,0,0,.5);">
                            <div class="bg-green-50 h-auto p-2 md:max-w-screen-lg md:p-2 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
                                <button @click="open_export_category = false" type="button" class="text-right mt-2 w-10 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base mb-2 ">X</button>
                                <div class="text-left  mt-4">

                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>




    </section>
    <div class="container mx-auto px-4 rounded-xl border border-gray-50 overflow-x-auto">
        <div class="bg-white inline-block min-w-full shadow-md rounded-lg overflow-hidden">
            <table class="w-full table-collapse">
                <thead class="bg-pink-550">
                    <tr>
                        <th class="text-sm text-left uppercase font-semibold p-3 ">Category Image</th>

                        <th class="text-sm text-left uppercase font-semibold  p-3 ">Category name</th>
                        <th class="text-sm text-left uppercase font-semibold p-3 ">No of Products</th>
                        <th class="hidden md:inline-flex md:ml-16 text-sm uppercase font-semibold p-3 text-center">Modified</th>
                        <th class="inline-flex text-sm uppercase font-semibold md:ml-16 p-3 "><span class="md:hidden">Actions</span></th>
                    </tr>
                </thead>
                <tbody class="align-baseline">
                    <?php if (!empty($categories)) : ?>
                        <?php foreach (Paginator::paginate($categories, 5) as $category) : ?>
                            <tr class="group cursor-pointer hover:bg-green-50 border-b border-grey-light">
                                <td class="text-sm p-4 whitespace-no-wrap">
                                    <div class="flex-shrink-0 w-10 h-10">
                                        <img class="w-full h-full rounded-md" src="<?php asset("../../" . $category->image); ?>" alt="" />
                                    </div>
                                </td>

                                <td class="text-sm p-3 whitespace-no-wrap"><?= ucwords($category->name); ?></td>
                                <td class="text-center text-sm p-3 whitespace-no-wrap"><?= Product::count(['category_id', $category->id]); ?></td>

                                <td class="hidden md:inline-flex md:ml-16 text-sm p-3 whitespace-no-wrap text-center"><?= time_ago($category->updated_at); ?></td>
                                <td class="text-sm p-3 whitespace-no-wrap text-sm group-hover:visible">
                                    <div class="md:text-base text-gray-800 flex items-center gap-2">
                                        <div x-data="{ view: false }">












                                            <svg @click.prevent="view = true" xmlns="http://www.w3.org/2000/svg" class="hover:text-blue-600 text-blue-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>

                                            <template x-if="view">
                                                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);">
                                                    <div class="text-left bg-green-50 h-auto p-2 md:max-w-xl md:p-4 lg:p-4 shadow-xl rounded mx-2 md:mx-0" @click.away="view = false">

                                                        <div class="border bg-white p-4 my-2 max-w-md rounded-lg">
                                                            <div class="bg-cover h-32" style="background-image: url('<?= $category->image; ?>');"></div>
                                                            <div class="border-b px-4 pb-6 my-2">
                                                                <div class="text-center sm:text-left sm:flex mb-4">
                                                                    <img class="h-32 w-32 rounded-full border-4 border-white -mt-16 mr-4" src="<?= "../" . $category->image; ?>" alt="">
                                                                    <div class="py-2">
                                                                        <h3 class="font-bold text-2xl mb-4 text-gray-500 "><?= ucfirst($category->name); ?></h3>
                                                                        <div class="space-y-2">
                                                                            <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                                </svg>
                                                                                <span class="font-medium text-gray-500 "><?= ucfirst($category->id); ?></span>
                                                                            </div>
                                                                            <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                                                </svg>
                                                                                <span class="font-medium text-gray-500 "><?= ucfirst($category->name); ?></span>
                                                                            </div>
                                                                            <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                                                </svg>
                                                                                <span class="text-blue-700 hover:underline dark:text-blue-500"><?= $category->name; ?></span>
                                                                            </div>
                                                                            <div class="inline-flex text-grey-dark sm:flex items-center space-x-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                                                </svg>
                                                                                <span class="text-sm font-medium text-gray-500 ">Joined <?= date("jS M Y h:i:s"); ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="sm:px-6 sm:flex sm:flex-row-reverse">

                                                                <button @click="view = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>


                                        <div x-data="{ open: false }">
                                            <a @click.prevent="open = true" href="edituser?user_id<?= $category->category; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <template x-if="open">
                                                <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center " style="background-color: rgba(0,0,0,.5);">
                                                    <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded-lg bg-green-50  mx-2 md:mx-0" @click.away="open = false">
                                                        <h2 class="text-2xl text-green-500">Editing <?= " $category->name"; ?></h2>
                                                        <form action="users/update" method="post" class="border bg-white p-4 my-2 max-w-md rounded-lg">

                                                            <div class="flex space-x-4">
                                                                <div class="mb-6">
                                                                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>
                                                                    <input type="category" id="category" name="category" class="bg-green-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5     " value="<?= " $category->name"; ?>" required>
                                                                </div>

                                                            </div>
                                                            <div class="mb-6">
                                                                <div>
                                                                    <label class="block text-sm font-medium text-green-550 mb-2">
                                                                        Category photo
                                                                    </label>
                                                                    <div x-data="showImage()" class="flex justify-center px-6 py-2 border-2 border-green-550 border-dashed rounded-md">

                                                                        <label class="flex flex-col w-full h-40 border-4 border-dashed border-green-200 hover:bg-green-100  hover:border-green-300">
                                                                            <div class="relative flex flex-col items-center justify-center pt-7">
                                                                                <img id="preview" class="absolute inset-0 w-full h-40 object-center object-contain">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-green-500 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                                                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                                                                </svg>
                                                                                <p class="pt-1 text-sm tracking-wider text-green-500 group-hover:text-gray-600">
                                                                                    Select a photo</p>
                                                                            </div>
                                                                            <input name="image" type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" required="" />
                                                                        </label>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="id" value="<?= " $category->id"; ?>">
                                                            <div class="bg-green-50  sm:px-6 sm:flex sm:flex-row-reverse">
                                                                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">Update</button>
                                                                <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                            </div>
                                                        </form>


                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                        <?php if (isAdmin()) : ?>
                                            <div>
                                                <svg id="deleteButton" data-modal-toggle="deleteModal" xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                                <!-- Main modal -->
                                                <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                        <!-- Modal content -->
                                                        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
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
                                                                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                    No, cancel
                                                                </button>
                                                                <form id="delete-category-form" action="categories/delete" method="post">
                                                                    <input type="hidden" name="id" value="<?= "$category->id"; ?>">
                                                                    <button id="delete-category-btn" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm"> Yes, I'm sure</button>
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
                    <?php else : ?>
                        <tr class="group cursor-pointer hover:bg-green-50">
                            <td colspan="5" class=" text-center text-sm p-3  whitespace-no-wrap">
                                <h2 class="text-xs md:text-sm text-gray-700 font-bold tracking-wide md:tracking-wider">
                                    Looks like there are no users, <a class="text-sm text-green-550 tracking-wide hover:underline">Add </a> or come back when they have been added</h2>
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
            <?php if (!empty($categories)) : ?>
                <div class="border-t border-orange-200 bg-white px-4 py-3 flex items-center justify-between sm:px-6">

                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm leading-5 text-gray-700">
                                Showing
                                <span class="font-medium"><?= Paginator::$start; ?></span>
                                to
                                <span class="font-medium"><?= Paginator::$end; ?></span>
                                of
                                <span class="font-medium"><?= count($categories) ?></span>
                                results
                            </p>
                        </div>
                        <div>
                            <span class="relative z-0 inline-flex shadow-sm">
                                <?php Paginator::showLinks($categories); ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>


</main>
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