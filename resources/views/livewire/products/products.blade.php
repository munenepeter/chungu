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
                             All Items {{count($products)}}
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

                     @if (count($products) > 0)
                         @foreach ($products as $product)
                             <tr class="hover:shadow-md hover:bg-green-50">
                                 <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                                     <input
                                         class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
                                         type="checkbox" />
                                 </td>
                                 <td class="px-4 py-4 whitespace-no-wrap border-b border-green-200">
                                     <div class="flex items-center">
                                         <div class="flex-shrink-0 h-10 w-10">
                                             <img class="h-10 w-10 rounded-md" src="" alt=""
                                                 loading="lazy" />
                                         </div>
                                         <div class="ml-2">
                                             <p class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                                 <span>{{ ucwords($product->name) }}</span>
                                                 <span>&#183;</span>
                                                 <a class="text-blue-500 hover:text-blue-600"
                                                     href="/shop/{{ strtolower($product->category->name) }}/{{ $product->id }}">
                                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="w-4 h-4">
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
                                             <img class="h-10 w-10 rounded-full" src="{{ $product->category->image }}"
                                                 alt="" loading="lazy" />
                                         </div>
                                         <div class="ml-2">
                                             <div class="text-sm leading-5 font-medium text-gray-900">
                                                 <p
                                                     class="text-sm font-medium text-gray-900 flex items-center space-x-1">
                                                     <span>{{ ucwords($product->category->name) }}</span>
                                                     <span>&#183;</span>
                                                     <a class="text-blue-500 hover:text-blue-600"
                                                         href="/shop/{{ strtolower($product->category->name) }}"> <svg
                                                             xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5"
                                                             stroke="currentColor" class="w-4 h-4">
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
                                     Ksh{{ ucwords($product->price) }}.00
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
                                         <span> {{ ucwords(strtok($product->user->name, ' ')) }}</span>
                                         <span>&#183;</span>
                                         <span
                                             class="text-xs text-gray-600">{{ $product->updated_at->diffForHumans() }}
                                         </span>
                                     </p>
                                     <span class="text-xs text-gray-400">{{ $product->user->email }}</span>
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

                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="hover:text-blue-600 text-blue-400 w-5 h-5">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                             </svg>




                                         </div>

                                         <!-- Update product -->
                                         <div>
                                             <!-- Modal toggle -->
                                             <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="hover:text-green-600 text-green-400 w-5 h-5" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     stroke-width="2"
                                                     d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                             </svg>



                                         </div>


                                         <div>
                                             <!-- Modal toggle -->


                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="cursor-pointer hover:text-red-600 text-red-400 h-5 w-5">
                                                 <path stroke-linecap="round" stroke-linejoin="round"
                                                     d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                             </svg>


                                         </div>

                                     </div>
                                 </td>
                             </tr>
                         @endforeach
                     @else
                         <tr>
                             <td class="px-6 py-4" colspan="5" align="center">
                                 No products Found.
                             </td>
                         </tr>
                     @endif
                 </tbody>
                 <!-- BODY end -->
             </table>
         </div>
     </div>
 </div>
