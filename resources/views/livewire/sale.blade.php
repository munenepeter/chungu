 <div class="my-6 md:grid md:grid-cols-4 md:gap-4">
     <div class="hidden md:block md:my-8">
         <img src="{{ asset('storage/rotated-right.png') }}" class="mt-64 h-20 md:h-28 lg:h-64 w-64" alt=""
             srcset="">
     </div>
     <section class="mt-2 md:col-span-2 mx-auto">

         <div class="max-w-4xl mx-auto relative px-0 md:px-2" x-data="{ activeSlide: 1, slides: [{{ '\'' . implode('\',\'', $images) . '\'' }}] }">
             <a href="/sale">
                 <h5 style="font-family: 'Courgette', cursive;"
                     class="text-center px-4 md:px-1 mb-2 md:text-2xl text-1xl font-black tracking-loose text-japonica-500">
                     {{ $sale_title }}</h5>
             </a>
             <!-- Slides loop -->
             <template x-for="(slide, index) in slides" :key="index">
                 <div x-show="activeSlide === index"
                     class="px-2 font-bold text-5xl h-64 w-80 flex items-center bg-teal-100 text-white rounded-lg relative mx-auto">
                     <img :src="slide" class="rounded-md absolute inset-0 w-full h-full object-cover" />
                 </div>

             </template>
             <!-- Prev/Next Arrows -->
             <div class="absolute inset-0 flex">
                 <div class="flex items-center justify-start w-1/2">
                     <button id="forward-btn"
                         class="bg-teal-50 text-asparagus-500 hover:text-japonica-500 font-bold hover:shadow-lg rounded-full w-12 h-12 md:-ml-6 ml-1"
                         x-on:click="activeSlide = activeSlide === 0 ? slides.length - 1 : activeSlide - 1">
                         &#8592;
                     </button>
                 </div>
                 <div class="flex items-center justify-end w-1/2">
                     <button
                         class="bg-asparagus-50 text-asparagus-500 hover:text-japonica-500 font-bold hover:shadow rounded-full w-12 h-12 md:-mr-6 mr-1"
                         x-on:click="activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1">
                         &#8594;
                     </button>
                 </div>
             </div>
             <script>
                 let forward_btn = document.querySelector("#forward-btn");

                 setInterval(function() {
                     forward_btn.click();
                 }, 10000);
             </script>
             <!-- Buttons -->
             <div class="absolute w-full flex items-center justify-center sm:px-4">
                 <template x-for="(slide, index) in slides" :key="index">
                     <button
                         class="flex-1 w-2 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-asparagus-500 hover:shadow-lg"
                         :class="{
                             'bg-japonica-500': activeSlide === index,
                             'bg-orange-100': activeSlide !== index
                         }"
                         x-on:click="activeSlide = index"></button>
                 </template>
             </div>
         </div>

         <div class="my-8 px-4">
             <p class="mb-2 font-semibold lg:text-md text-sm">
                 Description
             </p>
             <h5 class="lg:text-xl text-md text-left font-bold tracking-tight text-japonica-500">Offer
                 valid till <?= date('j<\s\u\p>S</\s\u\p> M Y', strtotime(' + 4 days')) ?></h5>
         </div>
         <div class="items-center flex justify-between space-x-8 px-4">
             <a href="#"
                 class="py-2 lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-asparagus-500 rounded-lg hover:bg-white hover:text-asparagus-500 border-2 border-asparagus-500 focus:ring-4 focus:outline-none focus:ring-green-300">
                 View Offer </a>

             <a href="/sale"
                 class="py-2 lg:py-3 px-3 md:px-6 text-sm font-medium text-center text-asparagus-500 rounded-lg focus:ring-4 hover:bg-asparagus-500 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-asparagus-500">
                 More Offers
             </a>
         </div>
     </section>
     <div class="hidden md:block md:my-8">
         <img style="float:right;" class="mt-64 h-20 md:h-28 lg:h-64 w-64" src="{{ asset('storage/olive.png') }}"
             alt="" srcset="">
     </div>
 </div>
