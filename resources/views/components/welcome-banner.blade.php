  <x-collection-sale />

  <center>
      <div class="lg:ml-8 ml-0 lg:-mt-40 mt-4">
          <a href="/sales"
              class="md:text-xl text-md py-2 lg:py-3 px-3 md:px-6 font-medium text-center text-orange-550 rounded-lg focus:ring-4 hover:bg-orange-550 hover:text-white focus:outline-none focus:ring-green-300 border-2 border-orange-550">
              More Offers
          </a>
      </div>
  </center>

  <h5 class="lg:mt-28 mt-12 lg:ml-96 ml-10 text-xl text-left tracking-tight text-orange-550">Shop by Category</h5>

  <section class="grid grid-cols-6 gap-2 justify-items-center md:py-6 py-4 items-center sm:px-2">
      <button
          class="bg-white text-green-550 md:text-4xl text-2xl hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 md:-ml-6 -mr-4">
          &#8592;
      </button>

      @foreach (\Lunar\Models\Collection::all() as $category)
          @php
              $category = json_decode($category->attribute_data);
          @endphp

          <article class="flex items-center justify-center flex-col gap-2 p-2">
              <img src="https://images.pexels.com/photos/1563356/pexels-photo-1563356.jpeg?auto=compress&cs=tinysrgb&w=600"
                  class="md:w-24 w-12 md:h-24 h-12 rounded-full object-cover transition duration-200 hover:scale-110">

              <div class="md:my-2 text-green-550 md:text-md text-xs"> {{ $category->name->en }}</div>
          </article>
      @endforeach

      <button
          class="bg-white text-green-550 md:text-4xl text-2xl hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 md:-mr-6 -ml-4">
          &#8594;
      </button>
  </section>



  <section class="mt-4 lg:mx-8" id="about">
      <center>
          <h5 style="font-family: 'Courgette', cursive;"
              class="md:my-8 my-6 md:text-3xl text-2xl font-medium tracking-loose text-orange-550 dark:text-white">About
              Chungu Collections</h5>
      </center>
      <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
          style="background-image:url(https://images.unsplash.com/photo-1551970634-747846a548cb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Z3JlZW4lMjBsZWFmc3xlbnwwfHwwfHw%3D&w=1000&q=80);">
          <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
          <main class="p-5 z-10 mx-auto">
              <a href="https://chungu.com" class="block text-white hover:text-orange-550 ">
                  <p style="font-family: 'Courgette', cursive;"
                      class="hover:text-orange-550 md:text-8xl text-6xl font-black ">Chungu</p>
                  <p class="mt-4 text-4xl font-bold whitespace-nowrap dark:text-white hover:text-orange-550">COLLECTIONS
                  </p>
              </a>
          </main>
      </div>
      <div class="md:my-10 my-8 ">
          <div class="w-full lg:w-1/2 mx-auto p-2 md:p-2">
              <p class="leading-loose text-center font-semibold text-md md:text-lg">We offer a wide range of beautiful
                  and timeless pieces to suit any style. Whether you're looking for a special gift for a loved one or a
                  treat for yourself, you'll find what you're looking for here. Our collection includes necklaces,
                  bracelets, earrings, and rings crafted from high-quality materials, including gold, silver, and
                  diamonds. We're dedicated to providing our customers with the best shopping experience possible, and
                  that's why we offer free shipping, easy returns, and excellent customer service. Start browsing our
                  collection today and discover the perfect piece of jewelry to enhance your style.</p>
          </div>
      </div>
  </section>

  </div>
