<main class="flex w-full shadow-inner">
    <link rel="stylesheet" href="../static/css/shop.css">

    <section id="shopItems" class="container px-5 py-6 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-4 lg:gap-8 -m-4 sm:p-4 gap-2">
                <?php foreach ($categories as $category) : ?>
                    <div class="tile is-parent">
                        <article class="tile is-child has-background-image" style="background-image: url('https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600');">
                            <div class="tile-content">
                                <h2 class="shop-category"><?= strtoupper($category->name); ?></h2>
                                <div class="divider"></div>
                                <p>Inner Comfort</p>
                                <p class="italic">Finest <?= $category->name ?> collected amongst the country's best artisans.</p>
                                <div class="products">
                                    <?= $category->count ?> <span><?= $category->name ?></span>
                                </div>
                                <a href="/shop/<?= $category->name ?>" class="action">
                                    <span>More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <!-- Overlay -->
                            <div class="tile-overlay"></div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
            </div>

    </section>
</main>

