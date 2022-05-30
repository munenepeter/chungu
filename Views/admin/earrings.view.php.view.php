<?php 
include_once __DIR__.'/../base.view.php';
include_once __DIR__.'/../sections/admin-nav.view.php';

?>

<main>
    <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
        <div class="px-4 py-2 sm:px-0">
            <div class="border-2 border-dashed bg-white border-blue-100 rounded-lg h-full">
                <div class="m-2">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Product</h3>
                                <p class="mt-1 text-sm text-gray-600">
                                    Spice up your product for your clients.
                                </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="/addproduct" method="POST" enctype="multipart/form-data">
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-4 bg-white space-y-6 sm:p-6">

                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                                                <div class="mt-1 flex rounded-md shadow-sm">
                                                    <input type="text" name="name" id="name" class="mt-1  py-2 px-4 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-md sm:text-sm border-gray-300 rounded-md" placeholder="What is your product name?">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                <label for="price" class="block text-sm font-medium text-gray-700">Product Price</label>
                                                <input type="text" name="price" id="price" class="mt-1 py-2 px-4  focus:ring-blue-500 focus:border-blue-500 block w-full shadow-md sm:text-sm border-gray-300 rounded-md" placeholder="How much are you willing to sell?">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                                <label for="quantity" class="block text-sm font-medium text-gray-700">Available Quantity</label>
                                                <input type="text" name="quantity" id="quantity" class="mt-1 py-2 px-4  focus:ring-blue-500 focus:border-blue-500 block w-full shadow-md sm:text-sm border-gray-300 rounded-md" placeholder="How much of the product do you have?">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-700">
                                                Product photo
                                            </label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500" for="image" x-data="{ files: null }">
                                                            <span>Upload an Image</span>
                                                            <input type="file" class="sr-only" x-on:change="files = Object.values($event.target.files)" id="image" name="image">
                                                            <span class="text-red-600" x-text="files ? files.map(file => file.name).join(', ') : ''"></span>

                                                        </label>


                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button type="submit" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-md text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</main>