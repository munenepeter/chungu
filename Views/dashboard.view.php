<?php
include_once 'base.view.php';
include_once 'sections/admin-nav.view.php';
?>

<div class="flex items-center justify-center m-2">

    <!-- Component Start -->
    <div class="flex space-x-4 overflow-x-auto shadow-1xl p-4">
        <?php foreach ($data as $item) : ?>
            <div class="w-48 md:w-64 bg-white  shadow-xl p-6 rounded-2xl">
                <div class="flex items-center">
                    <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-100"> <svg class="w-4 h-4 stroke-current text-pink-600" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 112.5 122.9">
                            <path fill-rule="evenodd" d="M24.7 56.6a4.6 4.6 0 1 1-4.6 4.6 4.6 4.6 0 0 1 4.6-4.6Zm63 16.9h.2L100 61.2 88 49h-.3L75.4 61.2l12.3 12.3Zm6 .7a24.7 24.7 0 1 1-12 0l-13-13 13.7-13.7a10.8 10.8 0 0 1 3-20v-4.7a2.4 2.4 0 0 1 2.4-2.4 7.9 7.9 0 1 0-7.9-7.8 2.4 2.4 0 1 1-4.7 0 12.6 12.6 0 1 1 21.5 8.9A12.6 12.6 0 0 1 90 25v2.6a10.8 10.8 0 0 1 3 20l13.7 13.6-13 13Zm-6-41.3a5.2 5.2 0 1 1-5.1 5.2 5.2 5.2 0 0 1 5.2-5.2Zm0 50.2a15 15 0 1 1-15 15 15 15 0 0 1 15-15Zm0-26.5a4.6 4.6 0 1 1-4.5 4.6 4.6 4.6 0 0 1 4.6-4.6Zm-63 16.9 12.4-12.3L24.8 49h-.2L12.3 61.2l12.3 12.3Zm6 .7a24.7 24.7 0 1 1-12 0l-13-13 13.6-13.7a10.8 10.8 0 0 1 3-20v-4.7a2.4 2.4 0 0 1 2.4-2.4 7.9 7.9 0 1 0-7.9-7.8 2.4 2.4 0 0 1-4.7 0 12.6 12.6 0 1 1 21.5 8.9 12.6 12.6 0 0 1-6.5 3.5v2.6a10.8 10.8 0 0 1 3 20l13.7 13.6-13 13Zm-6-41.3a5.2 5.2 0 1 1-5.2 5.2 5.2 5.2 0 0 1 5.2-5.2Zm0 50.2a15 15 0 1 1-15 15 15 15 0 0 1 15-15Z" />
                        </svg>
                    </span>
                    <a href="/-/products"><span class="ml-2 text-sm font-medium text-pink-550"> <?= ucwords($item['name']); ?></span></a>
                </div>
                <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $item['all']; ?><span class="ml-2 text-lg">left</span></span>
                <div class="flex text-xs mt-3 font-medium">
                    <span class="text-green-500"><?= $item['all'] - $item['available']; ?></span>
                    <span class="ml-1 text-pink-550"><span class="hidden md:inline-flex">out of</span><span class="md:hidden">/</span> </span>
                    <span class="ml-1 text-green-500"><?= $item['all']; ?></span>
                    <span class="ml-1 text-pink-550">Sold</span>
                </div>
            </div>
        <?php endforeach; ?>  
    </div>
    <!-- Component End  -->
</div>
<div class="flex items-center justify-center m-2">
    <section class="grid md:grid-cols-2 xl:grid-cols-4 xl:grid-rows-3 xl:grid-flow-col gap-6">
        <div class="flex flex-col md:col-span-2 md:row-span-3 bg-white shadow rounded-lg">
            <div class="text-green-500 px-6 py-5 font-semibold border-b border-green-100">The number of Liked Products</div>
            <div class="p-4 flex-grow">
                <div class="flex items-center justify-center h-full px-4 py-16 text-green-400 text-3xl font-semibold bg-green-100 border-2 border-green-200 border-dashed rounded-md">Chart</div>
            </div>
        </div>
        <div class="flex flex-col  md:col-span-2 row-span-3 bg-white shadow rounded-lg">
            <div class="text-green-500 px-6 py-5 font-semibold border-b border-green-100">The number by sold products</div>
            <div class="p-4 flex-grow">
                <div class="flex items-center justify-center h-full px-4 py-24 text-green-400 text-3xl font-semibold bg-green-100 border-2 border-green-200 border-dashed rounded-md">Chart</div>
            </div>
        </div>
    </section>
</div>
 