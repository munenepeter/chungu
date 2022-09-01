<?php

use Chungu\Core\Mantle\Request; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#799649">
    <link rel="icon" href="/../static/imgs/favicon/norm-favicon.svg" type="image/svg">
    <link rel="stylesheet" type="text/css" href="/../static/css/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>

    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://unpkg.com/vue@3"></script>

    <script defer src="/../../static/js/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <title>Chungu <?= (Request::uri() == "") ? "Collections" : "| " . ucwords(str_replace("/", " - ", Request::uri())); ?></title>

    <meta name="title" content="Chungu — All your jewellery in one place">
    <meta name="description" content="Chungu has all your beloved jewels, from necklaces to rings, to belts and bracelets all that within Nairobi">
    <meta name="keywords" content="Chungu, chungu, chungu collections, Accessories, jewellery, cheap, jewellery, kenyan, nairobi jewellery, simple earrings, beautiful earrings, necklaces, anklets, bracelets, offers, buy earrings, online shop, ">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://chungu.co.ke/">
    <meta property="og:title" content="Chungu — All your jewellery in one place">
    <meta property="og:description" content="Chungu has all your beloved jewels, from necklaces to rings, to belts and bracelets all that within Nairobi">
    <meta property="og:image" content="<?php asset('imgs/offer/03.jpeg'); ?>">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://chungu.co.ke/">
    <meta property="twitter:title" content="Chungu — All your jewellery in one place">
    <meta property="twitter:description" content="Chungu has all your beloved jewels, from necklaces to rings, to belts and bracelets all that within Nairobi">
    <meta property="twitter:image" content="<?php asset('imgs/offer/03.jpeg'); ?>">
</head>
<script>
    function notify(text) {
        const notifyDiv = $('#notify');
        const notifyMsg = $('#notifyMsg');
        if (text === '') {
            return;
        }
        notifyDiv.removeClass('hidden');
        notifyMsg.html(text);
        notifyDiv.delay(6000).fadeOut(600);
    }



</script>

<body  class="h-screen scroll-smooth">
    
<div id="app">{{ message }}</div>
    <div id="notify" class="hidden fixed bottom-0 right-0 right-0">
        <div id="toast-default" class="flex items-center w-full max-w-xs p-4 text-green-700 bg-green-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div id="notifyMsg" class="ml-3 text-sm font-normal"></div><button type="button" class="ml-4 -mx-1.5 -my-1.5 bg-pink-550 text-green-700 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-default" aria-label="Close"><span class="sr-only">Close</span><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg></button>
        </div>
    </div>