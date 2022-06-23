<?php

use Chungu\Core\Mantle\App; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php asset('imgs/favicon/error-favicon.svg'); ?>"type="image/gif">
    <link rel="stylesheet" type="text/css" href="<?php asset('css/tailwind.css'); ?>">
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Error <?= $code; ?></title>
</head>

<body>
    <div class="grid place-items-center h-screen">

        <div class="space-y-4 text-center">
            <?php if (ENV === 'development') : ?>
                <h2 class="text-4xl text-green-550"><?= $code; ?></h2>
                <p class="mb-4"><?= $message; ?></p>
            <?php endif; ?>
            <?php if (ENV === 'production') : ?>
                <?php
                $errors = App::get('config')['codes'][$code];
                ?>
                <h2 class="text-4xl"><?= $errors[0]; ?></h2>
                <p><?= $errors[1]; ?></p>
            <?php endif; ?>

            <a onclick="history.back()" style="color: #DE7B65;" class="m-4 hover:underline cursor-pointer">Go Back</a>

        </div>
    </div>

</body>

</html>