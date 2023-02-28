<x-jet-dialog-modal wire:model="addProduct">
    <x-slot name="title">
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
            <h3 class="text-lg font-semibold text-orange-500 dark:text-white">
                Add Product
            </h3>
            <button wire:click="$toggle('addProduct')" type="button"
                class="text-orange-500 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="defaultModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    </x-slot>

    <x-slot name="content">
     

            <form action="/-/product/create" method="POST" enctype="multipart/form-data">
                <div class="shadow-2xl sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-2 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 lg:col-span-2">
                                <x-jet-label for="product_name" value="{{ __('Product Name') }}" />
                                <x-jet-input id="product_name" wire:model="product_name" placeholder="What is your product name?"
                                    class="block mt-1 w-full" type="text" name="product_name" :value="old('product_name')" required
                                    autofocus />
                            </div>
                            <div class="col-span-3 lg:col-span-1">
                                <x-jet-label for="product_color" value="{{ __('Product Color') }}" />
                                <select id="product_color" name="product_color" wire:model="product_color"
                                    class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550"
                                    required="">
                                    <option>- Choose a color - </option>
                                    <option value="gold">Gold</option>
                                    <option value="silver">Silver</option>
                                    <option value="red">Red</option>
                                    <option value="green">Green</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="pink">Pink</option>
                                    <option value="white">White</option>
                                    <option value="black">Black</option>
                                    <option value="both">Both</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-6 gap-4">
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="price" class="block text-sm font-medium text-green-550">Product
                                    Price</label>
                                <input type="text"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    pattern="[0-9]+" title="Please input only numbers" name="price" id="price"
                                    class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550"
                                    placeholder="How much are you selling?" required="">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="quantity" class="block text-sm font-medium text-green-550">Available
                                    Quantity</label>
                                <input type="text"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    pattern="[0-9]+" title="Please input only numbers" name="quantity" id="quantity"
                                    class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550"
                                    placeholder="How many pieces do you have?" required="">
                            </div>
                            <div class="col-span-3 lg:col-span-2">
                                <label for="default" class="block text-sm font-medium text-green-550">Category</label>
                                <select id="default" name="category"
                                    class="mt-1  py-2 px-4 focus:ring-pink-500 focus:border-pink-500 block w-full shadow-md sm:text-sm border-green-550 rounded-md placeholder-green-500 text-pink-550"
                                    required="">
                                    <?php if (!empty($categories)) : ?>
                                    <option>- Choose a category - </option>
                                    <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category->name ?>"><?= ucwords($category->name) ?></option>
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
                            <div x-data="showImage()"
                                class="flex justify-center px-6 py-2 border-2 border-green-550 border-dashed rounded-md">

                                <label
                                    class="flex flex-col w-full h-40 border-4 border-dashed border-green-200 hover:bg-green-100  hover:border-green-300">
                                    <div class="relative flex flex-col items-center justify-center pt-7">
                                        <img id="preview"
                                            class="absolute inset-0 w-full h-40 object-center object-contain">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-12 h-12 text-green-500 group-hover:text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <p class="pt-1 text-sm tracking-wider text-green-500 group-hover:text-gray-600">
                                            Select a photo</p>
                                    </div>
                                    <input name="image" type="file" class="opacity-0" accept="image/*"
                                        @change="showPreview(event)" required="" />
                                </label>


                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{-- <form>
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" wire:model="name" placeholder="Enter the name"
                        class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                        autofocus />
                </div>
                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" wire:model="email" placeholder="Enter the email"
                        class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                        autofocus />
                </div>

            </div>
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <x-jet-label for="phone" value="{{ __('Phone Number') }}" />
                    <x-jet-input id="phone" wire:model="phone" placeholder="Enter the phone number"
                        class="block mt-1 w-full" type="text" name="name" :value="old('phone')" required
                        autofocus />
                </div>
                <div>
                    <x-jet-label for="location" value="{{ __('Address') }}" />
                    <x-jet-input id="location" wire:model="location" placeholder="Where is the product located?"
                        class="block mt-1 w-full" type="text" name="location" :value="old('location')" required
                        autofocus />
                </div>

            </div>
            <div class="w-full">
                <div>
                    <x-jet-label for="notes" value="{{ __('Product Notes') }}" />
                    <textarea name="notes" id="notes" wire:model="notes" cols="5" rows="5" required autofocus
                        class="bg-gray-50 border border-green-300 text-gray-900 text-sm focus:ring-orange-600 focus:border-orange-600 block w-full p-2.5 rounded-md shadow-sm"></textarea>
                </div>
            </div>
        </form> --}}


    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('addProduct')" wire:loading.attr="disabled">
            Cancel
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" wire:click="storeProduct" wire:loading.attr="disabled">
            Save
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
