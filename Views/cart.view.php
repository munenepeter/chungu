<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php';

?>


<div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <div class="fixed top-20 inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
   





    </div>

    <div x-data="{ open: true }" class="fixed inset-0 overflow-hidden">
    <?php if (isset($_SESSION["cart_item"])) : ?>
        <?php $item_total = 0; ?>
        <template x-if="open">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 top-20 right-0 flex max-w-full pl-10">
                    <div class="pointer-events-auto w-screen max-w-md">
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                                <div class="flex items-start justify-between">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                                            <span class="sr-only">Close panel</span>
                                            <svg @click.prevent="open = false" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="flow-root">
                                        <ul role="list" class="-my-6 divide-y divide-gray-200">

                                        <?php foreach ($_SESSION["cart_item"] as $item) : ?>

                                            <li id="row_<?= $item["id"]; ?>" class="flex py-6">
                                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img src="<?php asset("../../" . $item["image"]); ?>" alt="" class="h-full w-full object-cover object-center">
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                                            <h3>
                                                                <a href="#"><?= $item["name"]; ?> </a>
                                                            </h3>
                                                            <p class="ml-4">Ksh<?= $item["price"];?>.00</p>
                                                        </div>
                                                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                    </div>
                                                    <div class="flex flex-1 items-end justify-between text-sm">
                                                        <p class="text-gray-500">Qty <?= $item["quantity"]; ?></p>

                                                        <div class="flex">
                                                            <button onClick="cartAction('remove','<?= $item["id"]; ?>')" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php $item_total += ($item["price"] * $item["quantity"]); ?>
                                    <?php endforeach; ?>
                                         

                                            <!-- More products... -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <p>Subtotal</p>
                                    <p>Ksh<?= $item_total; ?>.00</p>
                                </div>
                                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                                <div class="mt-6">
                                    <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                                </div>
                                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                    <p>
                                        or <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <?php endif; ?>
    </div>
</div>












<div class="grid place-items-center h-screen">
    <?php if (isset($_SESSION["cart_item"])) : ?>
        <?php $item_total = 0; ?>
        <div class="border bg-green-50 p-2 my-2 rounded-lg">
            <div class="rounded-lg bg-white w-full h-full border-b px-2 pb-6 my-2">
                <div class="py-4">
                    <div>
                        <h2 class="text-2xl font-semibold leading-tight">Shopping Bag</h2>
                    </div>
                    <div class="py-2 overflow-y-auto">
                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-y-auto">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Product
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Quantity
                                        </th>
                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                            Amount
                                        </th>

                                        <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($_SESSION["cart_item"] as $item) : ?>

                                        <tr id="row_<?= $item["id"]; ?>">
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-md" src="<?php asset("../../" . $item["image"]); ?>" alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 whitespace-no-wrap">
                                                            <?= $item["name"]; ?>
                                                        </p>
                                                        <p class="text-gray-600 whitespace-no-wrap"><?= $item["id"]; ?></p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap"><?= $item["quantity"]; ?></p>
                                            </td>

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">Ksh <?= $item["price"]; ?></p>
                                            </td>

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <button onClick="cartAction('remove','<?= $item["id"]; ?>')" type="button" class="inline-block text-gray-500 hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php $item_total += ($item["price"] * $item["quantity"]); ?>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right" colspan="4" align=right><strong>Total: </strong>Ksh <?= $item_total; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            </div>