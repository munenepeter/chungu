<?php
include_once 'base.view.php';
include_once 'sections/nav.view.php'
?>


<main class="p-2 flex w-full">
    <section id="products">
        <aside class="h-screen sticky top-4 -z-50 w-1/3 p-6 sm:w-60 dark:bg-coolGray-900 dark:text-coolGray-100">
            <nav class="space-y-8 text-sm">
                <div class="space-y-2">
                    <h2 class="text-sm font-semibold tracking-widest uppercase dark:text-coolGray-400">Getting Started</h2>
                    <div class="flex flex-col space-y-1">
                        <a rel="noopener noreferrer" href="#">Installation</a>
                        <a rel="noopener noreferrer" href="#">Plugins</a>
                        <a rel="noopener noreferrer" href="#">Migrations</a>
                        <a rel="noopener noreferrer" href="#">Appearance</a>
                        <a rel="noopener noreferrer" href="#">Mamba UI</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <h2 class="text-sm font-semibold tracking-widest uppercase dark:text-coolGray-400">Dashboard</h2>
                    <div class="flex flex-col space-y-1">
                        <a rel="noopener noreferrer" href="#">Header</a>
                        <a rel="noopener noreferrer" href="#">Drawer</a>
                        <a rel="noopener noreferrer" href="#">Page Title</a>
                        <a rel="noopener noreferrer" href="#">Menus</a>
                        <a rel="noopener noreferrer" href="#">Sidebar</a>
                        <a rel="noopener noreferrer" href="#">Footer</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <h2 class="text-sm font-semibold tracking-widest uppercase dark:text-coolGray-400">Pages</h2>
                    <div class="flex flex-col space-y-1">
                        <a rel="noopener noreferrer" href="#">Homepage</a>
                        <a rel="noopener noreferrer" href="#">Users</a>
                        <a rel="noopener noreferrer" href="#">Tools</a>
                        <a rel="noopener noreferrer" href="#">Settings</a>
                    </div>
                </div>
                <div class="space-y-2">
                    <h2 class="text-sm font-semibold tracking-widest uppercase dark:text-coolGray-400">Misc</h2>
                    <div class="flex flex-col space-y-1">
                        <a rel="noopener noreferrer" href="#">Tutorials</a>
                        <a rel="noopener noreferrer" href="#">Changelog</a>
                    </div>
                </div>
            </nav>
        </aside>
    </section>

    <section id="products">
        <section class="h-screen overflow-y-auto text-gray-600 body-font">
            <div class="container px-5 py-6 mx-auto">
                <center>
                    <a class="py-4" href="/shop/earrings">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                    </a>
                </center>
                <div class="grid grid-cols-3 gap-4 -m-4">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class=" p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                <p class="mt-1">$16.00</p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="container px-5 py-6 mx-auto">
                <center>
                    <a class="py-4" href="/shop/earrings">
                        <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                    </a>
                </center>
                <div class="grid grid-cols-3 gap-4 -m-4">
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class=" p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                            </a>
                            <div class="mt-4">
                                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
                                <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                                <p class="mt-1">$16.00</p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>
        <!-- <section id="Earrings">
            <center>
                <a class="py-4" href="/shop/earrings">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Earrings</h5>
                </a>
            </center>
            <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
                <div class="col-span-1"></div>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-span-2 mx-auto">
                        <div class="max-w-sm bg-white rounded-lg">
                            <a class="" href="/shop/earrings?pro_id=8hcjd9">
                                <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg " src="../static/imgs/earrings/fancy-beads.jpg" alt="">
                            </a>
                            <div class="mt-8">
                                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                                <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <div class="col-span-1"></div>
            </div>
        </section>

        <section id="necklaces" class="mx-auto">
            <center>
                <a class="py-4" href="/shop/necklaces">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Necklaces</h5>
                </a>
            </center>
            <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
                <div class="col-span-1"></div>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-span-2 mx-auto">
                        <div class="max-w-sm bg-white rounded-lg">
                            <a class="" href="#">
                                <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg " src="../static/imgs/earrings/fancy-beads.jpg" alt="">
                            </a>
                            <div class="mt-8">
                                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                                <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <div class="col-span-1"></div>
            </div>
        </section>

        <section id="Bracelets">
            <center>
                <a class="py-4" href="/shop/bracelets">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Bracelets</h5>
                </a>
            </center>
            <div class="mt-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
                <div class="col-span-1"></div>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-span-2 mx-auto">
                        <div class="max-w-sm bg-white rounded-lg">
                            <a class="" href="#">
                                <img class="transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                            </a>
                            <div class="mt-8">
                                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                                <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <div class="col-span-1"></div>
            </div>
        </section>

        <section id="Anklets">
            <center>
                <a class="py-4" href="/shop/anklets">
                    <h5 style="font-family: 'Cedarville Cursive', cursive;" class="mb-8 text-3xl font-black tracking-loose text-pink-550 dark:text-white">Anklets</h5>
                </a>
            </center>
            <div class="my-4 grid md:grid-cols-2 lg:grid-cols-8 gap-2  lg:gap-4">
                <div class="col-span-1"></div>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="col-span-2 mx-auto">
                        <div class="max-w-sm bg-white rounded-lg">
                            <a class="" href="#">
                                <img class="object-cover transform transition duration-500 hover:scale-125  w-48 h-32 rounded-lg " src="../static/imgs/earrings/fancy-beads.jpg" alt="">
                            </a>
                            <div class="mt-8">
                                <p style="font-family: 'Cedarville Cursive', cursive;" class="text-xl mb-2 font-extrabold text-gray-700 dark:text-gray-400">Timeless darlings.</p>
                                <p class="mb-4 font-semibold text-gray-700 dark:text-gray-400">Ksh 200.00</p>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <div class="col-span-1"></div>
            </div>
        </section> -->
    </section>
</main>

<?php
include_once 'sections/footer.view.php'
?>