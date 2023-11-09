<div>
    <h5 class="lg:-mt-18 mt-8 lg:ml-96 ml-8 text-xl md:text-3xl lg:text-4xl text-left tracking-tight text-japonica-500">
        Shop by Category
    </h5>
    <section class="grid grid-cols-6 gap-2 justify-items-center md:py-6 py-4 items-center sm:px-2">
        <button
            class="text-center bg-white text-asparagus-500 md:text-2xl text-2xl hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 md:-ml-6 -mr-4 prev-btn">
            &#8592;
        </button>
        <div class="flex overflow-x-scroll w-full col-span-4 gap-8 carousel-container">
            @for ($i = 0; $i < 4; $i++)
                <article class="flex items-center justify-center flex-col gap-2 p-2 flex-shrink-0">
                    <img src="https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600"
                        class="md:w-24 w-12 md:h-24 h-12 rounded-full object-cover transition duration-200 hover:scale-110">
                    <div class="md:my-2 text-green-550 md:text-md text-xs">
                        <a href="/collections/">Name</a>
                    </div>
                </article>
            @endfor
        </div>
        <button
            class="text-center bg-white text-asparagus-500 md:text-2xl text-2xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 md:-mr-6 -ml-4 next-btn">
            &#8594;
        </button>
    </section>
</div>