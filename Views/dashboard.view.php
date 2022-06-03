<?php

use Chungu\Models\Product;

include_once 'base.view.php';
include_once 'sections/admin-nav.view.php'
?>

<div class="flex items-center justify-center m-2">

    <!-- Component Start -->
    <div class="grid grid-cols-1 lg:grid-cols-4  md:grid-cols-2 gap-4">
        <div class="w-48 md:w-64 bg-white shadow-2xl p-6 rounded-2xl">
            <div class="flex items-center">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-pink-100"> <svg class="w-4 h-4 stroke-current text-pink-600" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 112.5 122.9">
                        <path fill-rule="evenodd" d="M24.7 56.6a4.6 4.6 0 1 1-4.6 4.6 4.6 4.6 0 0 1 4.6-4.6Zm63 16.9h.2L100 61.2 88 49h-.3L75.4 61.2l12.3 12.3Zm6 .7a24.7 24.7 0 1 1-12 0l-13-13 13.7-13.7a10.8 10.8 0 0 1 3-20v-4.7a2.4 2.4 0 0 1 2.4-2.4 7.9 7.9 0 1 0-7.9-7.8 2.4 2.4 0 1 1-4.7 0 12.6 12.6 0 1 1 21.5 8.9A12.6 12.6 0 0 1 90 25v2.6a10.8 10.8 0 0 1 3 20l13.7 13.6-13 13Zm-6-41.3a5.2 5.2 0 1 1-5.1 5.2 5.2 5.2 0 0 1 5.2-5.2Zm0 50.2a15 15 0 1 1-15 15 15 15 0 0 1 15-15Zm0-26.5a4.6 4.6 0 1 1-4.5 4.6 4.6 4.6 0 0 1 4.6-4.6Zm-63 16.9 12.4-12.3L24.8 49h-.2L12.3 61.2l12.3 12.3Zm6 .7a24.7 24.7 0 1 1-12 0l-13-13 13.6-13.7a10.8 10.8 0 0 1 3-20v-4.7a2.4 2.4 0 0 1 2.4-2.4 7.9 7.9 0 1 0-7.9-7.8 2.4 2.4 0 0 1-4.7 0 12.6 12.6 0 1 1 21.5 8.9 12.6 12.6 0 0 1-6.5 3.5v2.6a10.8 10.8 0 0 1 3 20l13.7 13.6-13 13Zm-6-41.3a5.2 5.2 0 1 1-5.2 5.2 5.2 5.2 0 0 1 5.2-5.2Zm0 50.2a15 15 0 1 1-15 15 15 15 0 0 1 15-15Z" />
                    </svg>
                </span>
                <a href="/-/earrings"><span class="ml-2 text-sm font-medium text-pink-550">Earrings</span></a>
            </div>
            <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $data['aEarrings'];?><span class="ml-2 text-lg">left</span></span>
            <div class="flex text-xs mt-3 font-medium">
                <span class="text-green-500"><?= $data['allEarrings'] - $data['aEarrings'];?></span>
                <span class="ml-1 text-pink-550">out of </span>
                <span class="ml-1 text-green-500"><?= $data['allEarrings']; ?></span>
                <span class="ml-1 text-pink-550">Sold</span>
            </div>
        </div>
        <div class="w-48 md:w-64 bg-white shadow-2xl p-6 rounded-2xl">
            <div class="flex items-center">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-100">
                    <svg class="w-4 h-4 stroke-current text-red-600" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" viewBox="0 0 121.75 122.88">
                        <path d="M12.96 20.77c3.4-1.05 6.41-1.79 9.12-2.45C31.62 16 36.99 14.69 42.74 1.57 43.17.59 44.12 0 45.13 0h31.91c1.19 0 2.2.8 2.51 1.89 1.23 3.43 2.69 6.45 4.49 8.93 1.69 2.33 3.68 4.18 6.06 5.44l22.83 5.97c.25.07.49.17.7.3 11.43 6.98 8.26 19.98 5.52 31.24-.41 1.7-.82 3.37-1.17 5.01-2.33 11.09-5.3 21.92-9.08 32.42s-8.38 20.66-13.97 30.38c-.48.84-1.36 1.31-2.26 1.31v.01H28.86c-1.03 0-1.93-.6-2.35-1.47-3.79-6.56-7.28-13.3-10.4-20.25-3.15-7.01-5.92-14.19-8.23-21.58-1.55-4.93-2.9-10-4.06-15.23a179.92 179.92 0 0 1-2.76-15.9L.88 47.1C-.57 35.98-2.13 23.98 12.96 20.77zm47.92 36.69c1.67 0 3.02 1.35 3.02 3.02s-1.35 3.02-3.02 3.02-3.02-1.35-3.02-3.02 1.35-3.02 3.02-3.02zm-15.99 1.38 9.74-9.74a35.086 35.086 0 0 1-16.52-7.91 35.163 35.163 0 0 1-11.33-18.66c-1.1.29-2.26.57-3.47.86-2.64.64-5.57 1.36-8.9 2.39l-.24.06C3.65 28.01 4.9 37.57 6.05 46.41l.18 1.39c.67 5.25 1.57 10.39 2.68 15.43 1.1 4.99 2.43 9.92 3.96 14.8 2.27 7.22 4.95 14.22 8.01 21.01 2.85 6.34 6.04 12.54 9.5 18.62h60.81c5.1-9.04 9.32-18.47 12.83-28.22 3.68-10.23 6.58-20.83 8.88-31.72.34-1.61.77-3.37 1.21-5.17 2.3-9.43 4.94-20.29-2.87-25.37l-16.09-4.2c-1.84 7.48-6.08 14.01-11.85 18.75a35.064 35.064 0 0 1-16.12 7.43l9.7 9.7c.9.9.9 2.36 0 3.26L62.51 76.46c-.9.9-2.36.9-3.26 0L44.89 62.1c-.9-.9-.9-2.36 0-3.26zm35.08-21.16c4.93-4.05 8.55-9.64 10.11-16.04l-1.41-.37c-.24-.04-.48-.12-.71-.24-3.26-1.66-5.92-4.09-8.14-7.14-1.81-2.5-3.31-5.41-4.58-8.65H46.81C42.21 15.1 37.77 18.77 31.78 21c1.41 6.43 4.9 12.08 9.71 16.22 10.37 9.74 27.53 9.94 38.48.46zM60.58 49.67l-10.8 10.8 11.1 11.1 11.1-11.1-10.8-10.8h-.17c-.15.01-.29.01-.43 0z" />
                    </svg>
                </span>
                <a href="/-/necklaces"><span class="ml-2 text-sm font-medium text-pink-550">Necklaces</span></a>
            </div>
            <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $data['aNecklaces'];?><span class="ml-2 text-lg">left</span></span>
            <div class="flex text-xs mt-3 font-medium">
                <span class="text-green-500"><?= $data['allNecklaces'] - $data['aNecklaces'];?></span>
                <span class="ml-1 text-pink-550">out of </span>
                <span class="ml-1 text-green-500"><?= $data['allNecklaces']; ?></span>
                <span class="ml-1 text-pink-550">Sold</span>
            </div>
        </div>
        <div class="w-48 md:w-64 bg-white shadow-2xl p-6 rounded-2xl">
            <div class="flex items-center">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-100">
                    <svg class="w-4 h-4 stroke-current text-red-600" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 122.88 108.79" viewBox="0 0 122.9 108.8">
                        <path d="m79.3 53.8-6 1.5L94 76l-32.7 32.7L28.8 76l2.7-2.7 18.2-18.2-6-1.5v-.2A11.5 11.5 0 0 1 24 43.2c-3.7-2.9-7-6.2-10-9.9-.7.2-1.5.3-2.3.3a11.6 11.6 0 0 1-8.2-19.8 60 60 0 0 1-2.1-9.4 3.8 3.8 0 1 1 7.5-1.1 53 53 0 0 0 1.6 7.2h1.1a11.5 11.5 0 0 1 9 18.8c2.3 2.7 4.8 5.2 7.5 7.5A11.5 11.5 0 0 1 46.6 46v.5a53.5 53.5 0 0 0 29.7.2v-.8A11.5 11.5 0 0 1 95 37l.4-.3a47 47 0 0 0 7.1-7 11.5 11.5 0 0 1 10.3-19 39 39 0 0 0 1.2-4.9 3.8 3.8 0 1 1 7.5 1.5c-.5 2.4-1 4.7-1.8 7a11.5 11.5 0 0 1-10.4 19.2 61.3 61.3 0 0 1-10.3 10c.2.8.2 1.6.2 2.4a11.5 11.5 0 0 1-20 7.9zm32-37.3a5.6 5.6 0 1 1 0 11 5.6 5.6 0 0 1 0-11zm-99.8 0a5.6 5.6 0 1 1 0 11 5.6 5.6 0 0 1 0-11zm23.6 23.9a5.6 5.6 0 1 1 0 11 5.6 5.6 0 0 1 0-11zm52.7 0a5.6 5.6 0 1 1 0 11 5.6 5.6 0 0 1 0-11zM61.4 69.6a6.6 6.6 0 1 1 0 13.1 6.6 6.6 0 0 1 0-13.1zM42.7 76l18.7-18.7L80.2 76 61.4 95 42.7 76z" style="fill-rule:evenodd;clip-rule:evenodd" />
                    </svg>
                </span>
                <a href="/-/anklets"> <span class="ml-2 text-sm font-medium text-pink-550">Anklets</span></a>
            </div>
            <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $data['aAnklets'];?><span class="ml-2 text-lg">left</span></span>
            <div class="flex text-xs mt-3 font-medium">
                <span class="text-green-500"><?= $data['allAnklets'] - $data['aAnklets'];?></span>
                <span class="ml-1 text-pink-550">out of </span>
                <span class="ml-1 text-green-500"><?= $data['allAnklets']; ?></span>
                <span class="ml-1 text-pink-550">Sold</span>
            </div>
        </div>
        <div class="w-48 md:w-64 bg-white shadow-2xl p-6 rounded-2xl">
            <div class="flex items-center">
                <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-100">
                    <svg class="w-4 h-4 stroke-current text-red-600" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 109 123">
                        <path fill-rule="evenodd" d="M81 13c0 1 4 6 2 8l2 1c-1-2 1-5 1-6 1 2 3 7 1 9l2 2c0-3 2-5 3-6 0 1 3 7 0 9h1l1 2c0-3 2-5 3-6 0 2 2 7-1 9l1 1c0-2 2-3 3-5 0 2 2 8-1 9l1 3 4-5c0 2 0 8-3 9l1 2 4-4c0 2 0 8-3 9v2l5-4c-1 2-1 8-5 8v3l6-3c-1 1-3 7-6 7l-1 3c2-2 5-2 6-2-1 1-4 7-7 6l-1 2 7-1c-1 1-5 6-8 5l-1 2h7c-2 1-6 6-9 3l-2 3h7c-2 1-6 6-9 3l-3 2c4-1 6 1 7 1-1 1-7 6-9 2l-3 2c3-1 6 1 8 2-2 0-9 4-11 0l-2 1c3 0 5 2 7 4-2 0-9 2-11-2h-1a7 7 0 1 1-8 3 48 48 0 0 1-6 1 9 9 0 1 1-11 0 49 49 0 0 1-7-1 7 7 0 1 1-6-2l-2-1c-2 4-9 2-11 2 2-2 4-4 7-4l-2-1c-2 4-9 0-11 0 2-1 5-3 8-2l-3-2c-2 4-8-1-10-2 2 0 4-2 8-1l-3-2c-2 3-7-2-9-3h7l-1-3c-4 3-8-2-10-3h8l-2-2c-3 2-7-4-8-5l7 1-1-2c-3 1-6-5-8-6 2 0 5 0 7 2v-3c-4 1-6-6-7-7l6 3v-3c-4 1-4-6-5-8l5 4 1-2c-4-1-4-7-4-9l4 4 1-2c-3-1-3-7-3-9l4 5 1-3c-3-1-1-7-1-9 1 2 3 3 3 6l1-2c-2-2 0-7 0-9 1 1 3 3 3 5l1-1c-3-2 1-8 1-9l2 6 2-2c-2-3 1-8 1-9l2 6 2-1c-2-2 1-7 2-8l1 6 4-2c-2-3 1-7 2-8 1 2 2 4 1 7l14-5a50 50 0 0 1-8-6c-5-4-1-8 4-2a34 34 0 0 0 8 6 32 32 0 0 0 7-6c4-6 9-1 3 3a47 47 0 0 1-7 5 64 64 0 0 0 10 3h1c-1-3 1-5 1-8 1 2 4 7 1 9l3 1c-1-2 1-5 1-7 1 2 4 6 2 9l3 1c-1-2 0-4 1-6Zm-26 0c-14 7-24 4-36 20a44 44 0 0 0 3 59 46 46 0 0 0 65 0 44 44 0 0 0 3-60C78 17 69 19 55 13Z" />
                    </svg>
                </span>
                <a href="/~/bracelets"><span class="ml-2 text-sm font-medium text-pink-550">Bracelets</span></a>
            </div>
            <span class="block text-4xl font-semibold mt-4 text-green-550"><?= $data['aBracelets'];?><span class="ml-2 text-lg">left</span></span>
            <div class="flex text-xs mt-3 font-medium">
                <span class="text-green-500"><?= $data['allBracelets'] - $data['aBracelets'];?></span>
                <span class="ml-1 text-pink-550">out of </span>
                <span class="ml-1 text-green-500"><?= $data['allBracelets']; ?></span>
                <span class="ml-1 text-pink-550">Sold</span>
            </div>
        </div>
    </div>
    <!-- Component End  -->


    <?php
    //dd($availableEarrings);
    ?>

</div>