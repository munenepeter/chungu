<?php

use Chungu\Core\Mantle\Request; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/imgs/favicon.svg" type="image/gif">
    <link rel="stylesheet" type="text/css" href="../static/css/tailwind.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="../static/js/alpine.js"></script>
    <script defer src="../static/js/index.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <title>Clive <?= (Request::uri() == "") ? "" : "| " . ucwords(str_replace("/", " ", Request::uri())); ?></title>
</head>

<body class=" bg-gray-50">

    <?php if (!empty($notification)) : ?>
        <div class="fixed bottom-4 right-4 xl:right-20">
            <span class="transform duration-500 ease-in-out animate-bounce bg-blue-400 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
                <?= $notification; ?>
            </span>
        </div>
    <?php endif; ?>