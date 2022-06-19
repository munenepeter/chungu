<?php
include_once 'base.view.php';
?>
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