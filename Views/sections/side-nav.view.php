<?php

use Chungu\Models\Category;
?>

<aside class="bg-white shadow-inner hidden md:block h-fit sticky top-4 -z-50 w-1/4  p-6 sm:w-60 text-green-550">
    <nav class="space-y-8 text-sm">
        <div class="space-y-4">
            <div class="flex flex-col space-y-4">
                <a class="text-lg hover:text-pink-550" href="/shop/new-arrivals">New Arrivals
                </a>
                <a class="text-lg hover:text-pink-550" href="/shop/best-sellers">Best Sellers</a>
                <a class="text-lg hover:text-pink-550" href="/shop/offers">Offers</a>
            </div>
        </div>
        <div class="space-y-2">
            <div class="flex flex-col space-y-2">
                <a class=" hover:text-pink-550" href="#">Shop All
                </a>

                <?php foreach (Category::all() as $category) : ?>
                    <a href="/shop/<?= $category->name ?>" class="hover:text-pink-550" href="#"><?= ucwords($category->name); ?></a>
                <?php endforeach; ?>
            </div>
        </div>

    </nav>
</aside>