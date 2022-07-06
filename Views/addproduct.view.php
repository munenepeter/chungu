<?php
include_once  'base.view.php';
include_once 'sections/admin-nav.view.php';

?>

<main>
       <div class="max-w-7xl mx-auto py-2 sm:px-6 lg:px-8">
              <div class="px-4 py-2 sm:px-0">
                     <div class="border-2 border-dashed bg-white border-pink-550 rounded-lg h-full p-4">
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                   <div class="md:col-span-1">
                                          <div class="px-4 sm:px-0">
                                                 <h3 class="text-lg font-medium leading-6 text-green-550">Products</h3>
                                                 <p class="mt-1 text-sm text-pink-550">
                                                        Spice up your Products for your clients.
                                                 </p>
                                          </div>
                                   </div>
                                   <div class="mt-4 md:mt-0 md:col-span-2">
                                          <form action="/-/addproduct" method="POST" enctype="multipart/form-data">
                                                 <div class="shadow-2xl sm:rounded-md sm:overflow-hidden">
                                                        <div class="px-4 py-2 bg-white space-y-6 sm:p-6">
                                                               <div class="grid grid-cols-3 gap-6">
                                                                      <div class="col-span-3 lg:col-span-2">
                                                                             <label for="name" class="block text-sm font-medium text-green-550">Product Name</label>
                                                                             <input type="text" name="name" id="name" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" placeholder="What is your product name?" required="">
                                                                      </div>
                                                                      <div class="col-span-3 lg:col-span-1">
                                                                             <label for="default" class="block text-sm font-medium text-green-550">Available Colors</label>
                                                                             <select id="default" name="color" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" required="">
                                                                                    <option>- Choose a color - </option>
                                                                                    <option value="gold">Gold</option>
                                                                                    <option value="silver">Silver</option>
                                                                                    <option value="both">Both</option>
                                                                             </select>
                                                                      </div>
                                                               </div>
                                                               <div class="grid grid-cols-6 gap-4">
                                                                      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                                             <label for="price" class="block text-sm font-medium text-green-550">Product Price</label>
                                                                             <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[0-9]+" title="Please input only numbers" name="price" id="price" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" placeholder="How much are you selling?" required="">
                                                                      </div>

                                                                      <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                                             <label for="quantity" class="block text-sm font-medium text-green-550">Available Quantity</label>
                                                                             <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[0-9]+" title="Please input only numbers" name="quantity" id="quantity" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" placeholder="How many pieces do you have?" required="">
                                                                      </div>
                                                                      <div class="col-span-3 lg:col-span-2">
                                                                             <label for="default" class="block text-sm font-medium text-green-550">Category</label>
                                                                             <select id="default" name="category" class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550" required="">
                                                                                    <?php if (!empty($categories)) : ?>
                                                                                           <option>- Choose a category - </option>
                                                                                           <?php foreach ($categories as $category) : ?>
                                                                                                  <option value="<?= $category->name; ?>"><?= ucwords($category->name); ?></option>
                                                                                           <?php endforeach; ?>
                                                                                    <?php else : ?>
                                                                                           <option>- No Categories! - </option>
                                                                                    <?php endif; ?>
                                                                             </select>
                                                                      </div>
                                                               </div>
                                                               <div>
                                                                      <label class="block text-sm font-medium text-green-550 mb-2">
                                                                             Product photo
                                                                      </label>
                                                                      <div x-data="showImage()" class="flex justify-center px-6 py-2 border-2 border-green-550 border-dashed rounded-md">

                                                                             <label class="flex flex-col w-full h-40 border-4 border-dashed border-green-200 hover:bg-green-100  hover:border-green-300">
                                                                                    <div class="relative flex flex-col items-center justify-center pt-7">
                                                                                           <img id="preview" class="absolute inset-0 w-full h-40 object-center object-contain">
                                                                                           <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-green-500 group-hover:text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                                                                                  <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                                                                           </svg>
                                                                                           <p class="pt-1 text-sm tracking-wider text-green-500 group-hover:text-gray-600">
                                                                                                  Select a photo</p>
                                                                                    </div>
                                                                                    <input name="image" type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" required="" />
                                                                             </label>


                                                                      </div>
                                                               </div>
                                                        </div>
                                                        <div class="px-4 py-2 text-right sm:px-6">
                                                               <button style="background-color: #DE7B65;" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-md text-sm font-medium rounded-md text-white bg-pink-550 hover:bg-pink-500  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-550">
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