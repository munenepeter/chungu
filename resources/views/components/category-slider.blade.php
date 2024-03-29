<div>
    <h5 class="lg:-mt-18 mt-8 lg:ml-96 ml-8 text-xl md:text-3xl lg:text-4xl text-left tracking-tight text-japonica-500">
        Shop by Category
    </h5>
    <section class="grid grid-cols-6 gap-2 justify-items-center md:py-6 py-4 items-center sm:px-2">
        <button id="btnPrev"
            class="text-center bg-white text-asparagus-500 md:text-2xl text-2xl hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 md:-ml-6 -mr-4 prev-btn">
            &#8592;
        </button>
        <div id="carousel"
            class="flex overflow-x-scroll overflow-hidden snap-x-mandatory w-full col-span-4 gap-8 whitespace-nowrap no-scrollbar">
            @foreach ($categories as $category)
                <article class="snap-start flex items-center justify-center flex-col gap-2 p-2 flex-shrink-0 ">
                    <img src="{{ $category->image }}"
                        class="md:w-24 w-12 md:h-24 h-12 rounded-full object-cover transition duration-200 hover:scale-110 border shadow-md shadow-asparagus-500">
                    <div class="md:my-2 text-asparagus-500 md:text-md text-xs">
                        <a href="/shop/collections/{{ $category->slug }}">{{ $category->name }}</a>
                    </div>
                </article>
            @endforeach
        </div>
        <button id="btnNext"
            class="text-center bg-white text-asparagus-500 md:text-2xl text-2xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 md:-mr-6 -ml-4 next-btn">
            &#8594;
        </button>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var carousel = document.getElementById("carousel");
        var maxScrollWidth = carousel.scrollWidth - carousel.clientWidth;
        var scrollAmount = 10; // Adjust this value as needed
        var scrollInterval = 1000; // Adjust this value as needed

        function moveNext() {
            if (carousel.scrollLeft < maxScrollWidth) {
                carousel.scrollLeft += scrollAmount;
            } else {
                carousel.scrollLeft = 0;
            }
        }

        function movePrev() {
            if (carousel.scrollLeft > 0) {
                carousel.scrollLeft -= scrollAmount;
            } else {
                carousel.scrollLeft = maxScrollWidth;
            }
        }

        // Attach click event listeners to your next and previous buttons (optional)
        document.getElementById("btnNext").addEventListener("click", moveNext);
        document.getElementById("btnPrev").addEventListener("click", movePrev);

        // Use setInterval to continuously scroll the carousel
        setInterval(moveNext, scrollInterval);
    });
</script>
