<section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-4">
        <header class="text-center">
            <h2 class="text-xl font-bold text-japonica-900 sm:text-3xl">Featured Collections</h2>
            <ul class="mt-4 flex gap-1 overflow-auto">
                @foreach ($categories as $category)
                    <li class="shrink-0 md:shrink">
                        <a href="collections/{{ $category->slug }}">
                            <span
                                class="inline-flex items-center gap-1.5 rounded-lg border-2 px-3 py-1.5 border-asparagus-600 bg-white hover:bg-asparagus-200 hover:text-white shadow-md shadow-asapagus-700"><span
                                    class="text-asparagus-600 text-xs font-medium whitespace-nowrap">{{ $category->name }}</span>
                            </span>
                        </a>
                    </li>
                @endforeach

            </ul>
        </header>

        <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
            <li>
                <a href="#" class="group relative block">
                    <img src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt=""
                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                       
                        <h3 class="text-xl font-medium text-asparagus-400">Casual Trainers</h3>

                        <span
                            class="mt-1.5 inline-block bg-japonica-500 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                            Shop Now
                        </span>
                    </div>
                </a>
            </li>

            <li>
                <a href="#" class="group relative block">
                    <img src="https://images.unsplash.com/photo-1624623278313-a930126a11c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                        alt=""
                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-xl font-medium text-asparagus-400">Winter Jumpers</h3>

                        <span
                            class="mt-1.5 inline-block bg-japonica-500 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                            Shop Now
                        </span>
                    </div>
                </a>
            </li>

            <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                <a href="#" class="group relative block">
                    <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                        alt=""
                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                        <h3 class="text-xl font-medium text-asparagus-400">Skinny Jeans Blue</h3>

                        <span
                            class="mt-1.5 inline-block bg-japonica-500 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                            Shop Now
                        </span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>
