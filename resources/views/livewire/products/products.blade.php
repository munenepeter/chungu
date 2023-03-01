 <div class="max-w-7xl mx-auto">
     @if (session()->has('success'))
         <div class="alert alert-success" role="alert">
             {{ session()->get('success') }}
         </div>
     @endif
     @if (session()->has('error'))
         <div class="alert alert-danger" role="alert">
             {{ session()->get('error') }}
         </div>
     @endif
     @if ($addProduct)
         @include('livewire.products.create')
     @endif
     @if ($updateProduct)
         @include('livewire.products.update')
     @endif
     <div class="-my-2 py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="relative bg-white dark:bg-gray-800 sm:rounded-lg">
            <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search" required="">
                        </div>
                    </form>
                </div>
                <div
                    class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                    <button wire:click="addProduct()" type="button"
                        class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-orange-550 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 ">
                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                        </svg>
                        Add product
                    </button>
                    <div class="flex items-center w-full space-x-3 md:w-auto">
                        <p
                            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            All Items 10
                        </p>
                        <p
                            class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg md:w-auto focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            All Items 10
                        </p>
                    </div>
                </div>
            </div>
        </div>
         <div class="align-middle inline-block w-full shadow overflow-x-auto sm:rounded-lg border-b border-green-200">
             <table class="min-w-full">
                 <!-- HEAD start -->
                 <thead>

                     <tr
                         class="bg-gray-50 border-b border-green-200 text-xs leading-4 text-gray-500 uppercase tracking-wider">
                         <th class="px-6 py-3 text-left font-medium">
                             <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                                 type="checkbox" />
                         </th>
                         <th class="px-6 py-3 text-left font-medium">
                             Product
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


                     <tr class="hover:shadow-md hover:bg-green-50">
                         <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                             <input class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                                 type="checkbox" />
                         </td>
                         <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                             <div class="flex items-center">
                                 <div class="flex-shrink-0 h-10 w-10">
                                     <img class="h-10 w-10 rounded-md" src="" alt="" loading="lazy" />
                                 </div>
                                 <div class="ml-2">
                                     <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                         <span> <?= ucwords('name') ?> </span>
                                         <span>&#183;</span>
                                         <a class="text-blue-500 hover:text-blue-600" href="/shop/catgory/id"> <svg
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                             </svg></a>

                                     </p>
                                     <span class="text-xs text-gray-400">Brand</span>
                                 </div>
                             </div>


                         </td>
                         <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">

                             <div class="flex items-center">
                                 <div class="flex-shrink-0 h-10 w-10">
                                     <img class="h-10 w-10 rounded-full" src="" alt="" loading="lazy" />
                                 </div>
                                 <div class="ml-2">
                                     <div class="text-sm leading-5 font-medium text-gray-900">
                                         <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                             <span> <?= ucwords('Category') ?> </span>
                                             <span>&#183;</span>
                                             <a class="text-blue-500 hover:text-blue-600" href="/shop/category"> <svg
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                     class="w-4 h-4">
                                                     <path stroke-linecap="round" stroke-linejoin="round"
                                                         d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                                 </svg></a>

                                         </p>


                                     </div>
                                 </div>
                             </div>
                         </td>
                         <td
                             class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 text-gray-500">
                             Ksh 52.00
                         </td>
                         <td class="px-6 py-4 whitespace-no-wrap border-b border-green-200">
                             <span
                                 class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                 <?= ucwords('Available') ?>
                             </span>
                         </td>
                         <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                             <span class="text-xs font-medium"><?= 'Sold 2 of ' . 10 ?></span>
                         </td>
                         <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                             <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                 <span> Peter </span>
                                 <span>&#183;</span>
                                 <span class="text-xs text-gray-600">2 days ago </span>
                             </p>
                             <span class="text-xs text-gray-400">peter@chungu.co.ke</span>
                         </td>

                         <td
                             class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 text-gray-500">
                             <p class="text-sm">Oct 12%</p>
                             <span class="text-xs text-gray-400">Expiring 25 Oct</span>
                         </td>
                         <td
                             class="px-4 py-4 whitespace-no-wrap border-b border-green-200 text-sm leading-5 font-medium">
                             <div class="flex items-center gap-2">
                                 <!-- View product -->


                                 <!-- Modal toggle -->
                                 <div>

                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor"
                                         class="hover:text-blue-600 text-blue-400 w-5 h-5">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                     </svg>



                                     <!-- Main modal -->
                                     <template>
                                         <div style="background-color: rgba(0, 0, 0, .5)"
                                             class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                             <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                                 <!-- Modal content -->
                                                 <div
                                                     class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5 mx-auto">
                                                     <!-- Modal header -->
                                                     <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                         <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                             <h3 class="font-semibold ">
                                                                 <?= ucwords('name') ?>
                                                             </h3>

                                                             <img class="my-4 max-w-xs h-32" src=""
                                                                 alt="image description">

                                                             <p class="font-bold">
                                                                 Ksh58.00
                                                             </p>
                                                         </div>
                                                         <div>
                                                             <button type="button"
                                                                 class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white">
                                                                 <svg aria-hidden="true" class="w-5 h-5"
                                                                     fill="currentColor" viewBox="0 0 20 20"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                     <path fill-rule="evenodd"
                                                                         d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                         clip-rule="evenodd"></path>
                                                                 </svg>
                                                                 <span class="sr-only">Close modal</span>
                                                             </button>
                                                         </div>
                                                     </div>
                                                     <dl>
                                                         <dt
                                                             class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                             Details</dt>
                                                         <dd
                                                             class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                             Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                             Enim
                                                             minus earum non suscipit quos et minima velit assumenda,
                                                             impedit nulla reiciendis, tempore distinctio. Quasi.</dd>
                                                         <dt
                                                             class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                             Category</dt>
                                                         <dd
                                                             class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                             <?= ucwords('category') ?></dd>
                                                     </dl>
                                                     <div class="flex justify-between items-center">
                                                         <div class="flex items-center space-x-3 sm:space-x-4">
                                                             <button type="button"
                                                                 class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                                                                 <svg xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 20 20" fill="currentColor"
                                                                     aria-hidden="true" class="mr-1 -ml-1 w-5 h-5">
                                                                     <path fill-rule="evenodd"
                                                                         d="M4.25 5.5a.75.75 0 00-.75.75v8.5c0 .414.336.75.75.75h8.5a.75.75 0 00.75-.75v-4a.75.75 0 011.5 0v4A2.25 2.25 0 0112.75 17h-8.5A2.25 2.25 0 012 14.75v-8.5A2.25 2.25 0 014.25 4h5a.75.75 0 010 1.5h-5z"
                                                                         clip-rule="evenodd" />
                                                                     <path fill-rule="evenodd"
                                                                         d="M6.194 12.753a.75.75 0 001.06.053L16.5 4.44v2.81a.75.75 0 001.5 0v-4.5a.75.75 0 00-.75-.75h-4.5a.75.75 0 000 1.5h2.553l-9.056 8.194a.75.75 0 00-.053 1.06z"
                                                                         clip-rule="evenodd" />
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
                                 <div>
                                     <!-- Modal toggle -->
                                     <svg xmlns="http://www.w3.org/2000/svg"
                                         class="hover:text-green-600 text-green-400 w-5 h-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                             d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                     </svg>


                                     <!-- Main modal -->
                                     <template>
                                         <div style="background-color: rgba(0, 0, 0, .5)"
                                             class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                             <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                 <!-- Modal content -->
                                                 <div
                                                     class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                     <!-- Modal header -->
                                                     <div
                                                         class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                         <h3
                                                             class="text-lg font-semibold text-gray-900 dark:text-white">
                                                             Update Product (<?= ucwords('name') ?>)
                                                         </h3>
                                                         <button type="button"
                                                             class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                             <svg aria-hidden="true" class="w-5 h-5"
                                                                 fill="currentColor" viewBox="0 0 20 20"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                 <path fill-rule="evenodd"
                                                                     d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                     clip-rule="evenodd"></path>
                                                             </svg>
                                                             <span class="sr-only">Close modal</span>
                                                         </button>
                                                     </div>
                                                     <!-- Modal body -->
                                                     <form action="#">
                                                         <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                             <div>
                                                                 <label for="name"
                                                                     class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                                                 <input type="text" name="name" id="name"
                                                                     value="<?= ucwords('name') ?>"
                                                                     class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500"
                                                                     placeholder="Ex. Apple iMac 27&ldquo;">
                                                             </div>
                                                             <div>
                                                                 <label for="brand"
                                                                     class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                                                 <input type="text" name="brand" id="brand"
                                                                     value="<?= ucwords('brand') ?>"
                                                                     class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500"
                                                                     placeholder="Ex. Apple">
                                                             </div>
                                                             <div>
                                                                 <label for="price"
                                                                     class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                                                 <input type="number" value="58" name="price"
                                                                     id="price"
                                                                     class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-blue-500"
                                                                     placeholder="$299">
                                                             </div>
                                                             <div>
                                                                 <label for="category"
                                                                     class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product
                                                                     Category</label>
                                                                 <input type="text" id="disabled-input"
                                                                     aria-label="disabled input"
                                                                     class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"
                                                                     value="<?= ucwords('category') ?>" disabled>

                                                             </div>
                                                             <div class="grid grid-cols-3 gap-2 sm:col-span-2">
                                                                 <div>
                                                                     <label for="quantity"
                                                                         class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product
                                                                         Quantity</label>
                                                                     <input type="number" name="quantity"
                                                                         value="65" id="quantity"
                                                                         class="bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                                                                         placeholder="5" required="">
                                                                 </div>
                                                                 <div>
                                                                     <label for="color"
                                                                         class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product
                                                                         Color</label>
                                                                     <select id="color" name="color"
                                                                         class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                                         <?php if (!empty($colors)) : ?>
                                                                         <option>- Choose a color - </option>
                                                                         <?php foreach ($colors as $color) : ?>
                                                                         <option value="<?= $color ?>">
                                                                             <?= ucwords($color) ?></option>
                                                                         <?php endforeach; ?>
                                                                         <?php else : ?>
                                                                         <option>- No Colors! - </option>
                                                                         <?php endif; ?>
                                                                     </select>
                                                                 </div>
                                                                 <div>
                                                                     <label for="source"
                                                                         class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product
                                                                         Product</label>
                                                                     <input type="text" id="source"
                                                                         aria-label="disabled input"
                                                                         class=" bg-green-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"
                                                                         value="<?= ucwords('source') ?>" disabled>

                                                                 </div>
                                                             </div>
                                                             <div class="sm:col-span-2" x-data="showImage()">
                                                                 <label for="description"
                                                                     class="block mb-2 text-sm font-medium text-green-550 dark:text-white">Product
                                                                     Image</label>
                                                                 <label
                                                                     class="flex flex-col  items-center px-4 py-6 text-gray-900 bg-gray-50 rounded-lg shadow-lg tracking-wide border-2 border-dashed border-green-300 cursor-not-allowed">
                                                                     <svg id="helper-svg" class="w-8 h-8"
                                                                         fill="currentColor"
                                                                         xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20">
                                                                         <path
                                                                             d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 18c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                                                     </svg>
                                                                     <img id="preview"
                                                                         class="hidden relative inset-0 w-full h-32 rounded-md object-center object-contain">
                                                                     <span id="helper"
                                                                         class="mt-2 text-sm text-gray-500 text-center">Click
                                                                         to upload
                                                                         <br>
                                                                         SVG, PNG, JPG or GIF (MAX. 800x400px)</span>
                                                                     <input name="image" type='file'
                                                                         class="hidden" accept="image/*"
                                                                         @change="showPreview(event)" required=""
                                                                         disabled />
                                                                 </label>
                                                             </div>
                                                         </div>
                                                         <div class="flex items-center space-x-4">
                                                             <button type="submit" style="background-color: #DE7B65;"
                                                                 class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-green-800">
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
                                 <?php if (true) : ?>
                                 <div>
                                     <!-- Modal toggle -->


                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor"
                                         class="cursor-pointer hover:text-red-600 text-red-400 h-5 w-5">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                     </svg>

                                     <!-- Main modal -->
                                     <template x-if="7">
                                         <div style="background-color: rgba(0, 0, 0, .5)"
                                             class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                             <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                                 <!-- Modal content -->
                                                 <div
                                                     class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                     <button @click="= false" type="button"
                                                         class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                         data-modal-toggle="deleteModal">
                                                         <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                             viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                             <path fill-rule="evenodd"
                                                                 d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                 clip-rule="evenodd"></path>
                                                         </svg>
                                                         <span class="sr-only">Close modal</span>
                                                     </button>
                                                     <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto"
                                                         aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd"
                                                             d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                             clip-rule="evenodd"></path>
                                                     </svg>
                                                     <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you
                                                         want
                                                         to delete this item?</p>
                                                     <div class="flex justify-center items-center space-x-4">
                                                         <button data-modal-toggle="deleteModal" type="button"
                                                             class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-green-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-green-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                             No, cancel
                                                         </button>
                                                         <form id="delete-product-form" action="product/delete?back=/"
                                                             method="post">
                                                             <input type="hidden" name="id"
                                                                 value="<?= 'product_id' ?>">
                                                             <button id="delete-product-btn" type="submit"
                                                                 class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                 Yes, I'm sure</button>
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


                 </tbody>
                 <!-- BODY end -->
             </table>
         </div>
     </div>
 </div>
