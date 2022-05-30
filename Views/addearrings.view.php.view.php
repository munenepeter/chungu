<?php
include_once __DIR__ . '/../base.view.php';
include_once __DIR__ . '/../sections/admin-nav.view.php';

?>

<main>
       <div class="max-w-7xl mx-auto py-4 sm:px-6 lg:px-8">
              <div class="px-4 py-2 sm:px-0">
                     <div class="border-2 border-dashed bg-white border-pink-550 rounded-lg h-full p-4">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                   <div class="md:col-span-1">
                                          <div class="px-4 sm:px-0">
                                                 <h3 class="text-lg font-medium leading-6 text-green-550">Earring</h3>
                                                 <p class="mt-1 text-sm text-pink-550">
                                                        Spice up your Earring for your clients.
                                                 </p>
                                          </div>
                                   </div>
                                   <div class="mt-5 md:mt-0 md:col-span-2">
                                          <form action="/addEarring" method="POST" enctype="multipart/form-data">
                                                 <div class="shadow-2xl sm:rounded-md sm:overflow-hidden">
                                                        <div class="px-4 py-4 bg-white space-y-6 sm:p-6">

                                                               <div class="grid grid-cols-3 gap-6">
                                                                      <div class="col-span-3 sm:col-span-2">
                                                                             <label for="name" class="block text-sm font-medium text-green-550">Earring Name</label>
                                                                             <div class="mt-1 flex rounded-md shadow-sm">
                                                                                    <input type="text" name="name" id="name" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" placeholder="What is your Earring name?">
                                                                             </div>
                                                                      </div>
                                                               </div>
                                                               <div class="grid grid-cols-6 gap-6">
                                                                      <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                                                                             <label for="price" class="block text-sm font-medium text-green-550">Earring Price</label>
                                                                             <input type="text" name="price" id="price" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" placeholder="How much are you willing to sell?">
                                                                      </div>

                                                                      <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                                                                             <label for="quantity" class="block text-sm font-medium text-green-550">Available Quantity</label>
                                                                             <input type="text" name="quantity" id="quantity" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" placeholder="How much of the Earring do you have?">
                                                                      </div>
                                                               </div>
                                                               <div>
                                                                      <label class="block text-sm font-medium text-green-550">
                                                                             Earring photo
                                                                      </label>
                                                                      <div x-data="showImage()" class="flex justify-center px-6 pt-5 pb-6 border-2 border-green-550 border-dashed rounded-md">

                                                                             <label class="flex flex-col w-full h-40 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                                                    <div class="relative flex flex-col items-center justify-center pt-7">
                                                                                           <img id="preview" class="absolute inset-0 w-full h-40 object-center object-contain">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                                                                                  <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                                                                           </svg>
                                                                                           <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                                                                  Select a photo</p>
                                                                                    </div>
                                                                                    <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                                                             </label>


                                                                      </div>
                                                               </div>
                                                        </div>
                                                        <div class="px-4 py-3 text-right sm:px-6">
                                                               <button type="submit" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-md text-sm font-medium rounded-md text-white bg-pink-550 hover:bg-pink-500  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-550">
                                                                      Save
                                                               </button>
                                                        </div>
                                                 </div>
                                          </form>
                                   </div>
                            </div>

                     </div>
              </div>
       </div>
</main>
<!-- <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-pink-550 hover:text-pink-550 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500" for="image" x-data="{ files: null }">
                                                            <span>Upload an Image</span>
                                                            <input type="file" class="sr-only" x-on:change="files = Object.values($event.target.files)" id="image" name="image">
                                                            <span class="text-red-600" x-text="files ? files.map(file => file.name).join(', ') : ''"></span>

                                                        </label>
                                                    </div>
                                                    <p class="text-xs text-green-500">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div> -->

<script>
       function showImage() {
              return {
                     showPreview(event) {
                            if (event.target.files.length > 0) {
                                   var src = URL.createObjectURL(event.target.files[0]);
                                   var preview = document.getElementById("preview");
                                   preview.src = src;
                                   preview.style.display = "block";
                            }
                     }
              }
       }
</script>
</body>

</html>