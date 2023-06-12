 <div class="my-6 md:grid md:grid-cols-4 md:gap-4">
     <div class="hidden md:block md:my-8">
         <img src="https://chungu.co.ke/static/imgs/rotated-right.png" class="mt-72 h-20 md:h-28 lg:h-72 w-64"
             alt="" srcset="">
     </div>
     <section class="-mt-2 col-span-2 mx-auto">

         @php
             $images = [];
             foreach ($this->saleCollectionImages as $imageGroup) {
                 foreach ($imageGroup as $image) {
                     $images[] = asset('storage/images/')."/$image->file_name";
                 }
             }
             
         @endphp

         <div class="relative px-2" x-data="{ activeSlide: 1, slides: [{{ '\'' . implode('\',\'', $images) . '\''; }}] }">
             <a href="/sale">
                 <h5 style="font-family: 'Courgette', cursive;"
                     class="mb-2 md:text-3xl text-2xl font-black tracking-loose text-orange-550 dark:text-white">
                     Mid <?= date('F') ?> {{ $this->saleCollection->translateAttribute('name') }} </h5>
             </a>
             <!-- Slides loop -->
             <template  x-for="(slide, index) in slides" :key="index">
                 <div x-show="activeSlide === index"
                     class="overflow-hidden relative h-64 px-2 duration-700 ease-in-out">
                     <h2 class="text-green-550 text-center text-1xl font-black tracking-loose" x-text="slide"></h2>
                     <img :src="slide"
                         class="mt-6 rounded-md max-h-64 object-cover block absolute top-1/2 left-1/2 w-64 -translate-x-1/2 -translate-y-1/2" />
                 </div>
             </template>
             <!-- Prev/Next Arrows -->
             <div class="absolute inset-0 flex -mt-24">
                 <div class="flex items-center justify-start w-1/2">
                     <button id="forward-btn"
                         class="bg-white text-green-550 text-xl hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 md:-ml-6 -ml-2"
                         x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
                         &#8592;
                     </button>
                 </div>
                 <div class="flex items-center justify-end w-1/2">
                     <button
                         class="bg-white text-green-550 text-xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 md:-mr-6 -mr-2"
                         x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
                         &#8594;
                     </button>
                 </div>
             </div>
             <script>
                 let forward_btn = document.querySelector("#forward-btn");

                 setInterval(function() {
                     forward_btn.click();
                 }, 5000);
             </script>

             <!-- Buttons -->
             <div class="w-full flex items-center justify-center md:px-4 px-2 -mt-8">
                 <template x-for="(slide, index) in slides" :key="index">
                     <button
                         class="flex-1 w-2 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-orange-550 hover:shadow-lg"
                         :class="{
                             'bg-orange-600': activeSlide === index,
                             'bg-teal-300': activeSlide !== index
                         }"
                         x-on:click="activeSlide = index"></button>
                 </template>
             </div>

             <div class="my-4">
                 <p class="mb-2 font-semibold lg:text-md text-sm">
                     {{ $this->saleCollection->translateAttribute('description') }}
                 </p>
                 <h5 class="lg:text-xl text-md text-left font-bold tracking-tight text-orange-550">Offer
                     valid till <?= date('j<\s\u\p>S</\s\u\p> M Y', strtotime(' + 1 day')) ?></h5>
             </div>
             <div class="items-center flex justify-between space-x-8">

                 <a href="{{ route('collection.view', $this->saleCollection->defaultUrl->slug) }}"
                     class="py-2 lg:py-3 px-3  md:px-6 text-sm font-medium text-center text-white bg-green-550 rounded-lg hover:bg-white hover:text-green-550 border-2 border-green-550 focus:ring-4 focus:outline-none focus:ring-green-300">
                     View Offer </a>

                 <a href="/sale"
                     class="py-2 lg:py-3 px-3 md:px-6 text-sm font-medium text-center text-green-550 rounded-lg focus:ring-4 hover:bg-green-550 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-green-550">
                     More Offers
                 </a>
             </div>

         </div>

     </section>
     <div class="hidden md:block md:my-8">
         <img style="float:right;" class="mt-72 h-20 md:h-28 lg:h-72 w-64"
             src="https://chungu.co.ke/static/imgs/olive.png" alt="" srcset="">
     </div>
 </div>
