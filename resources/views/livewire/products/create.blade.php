<x-jet-dialog-modal wire:model="addProduct">
    <x-slot name="title">
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
            <h3 class="text-lg font-semibold text-orange-550 dark:text-white">
                Add Product
            </h3>
            <button wire:click="$toggle('addProduct')" type="button"
                class="text-orange-550 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
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
        <form method="POST" enctype="multipart/form-data" class="px-4 bg-white space-y-2">
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
                        class="mt-1 py-2 px-4 focus:ring-orange-550 focus:border-orange-550 block w-full shadow-md bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-md"
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
                    <x-jet-label for="product_price" value="{{ __('Product Price') }}" />
                    <x-jet-input id="product_price" wire:model="product_price" placeholder="Selling price?"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        class="block mt-1 w-full" type="text" name="product_price" :value="old('product_price')" required
                        pattern="[0-9]+" autofocus />
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <x-jet-label for="product_quantity" value="{{ __('Available Quantity') }}" />
                    <x-jet-input id="product_quantity" wire:model="product_quantity"
                        placeholder="No of pieces available"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        class="block mt-1 w-full" type="text" name="product_quantity" :value="old('product_quantity')" required
                        pattern="[0-9]+" autofocus />

                </div>
                <div class="col-span-3 lg:col-span-2">
                    <x-jet-label for="default" value="{{ __('Product Category') }}" />
                    <select id="default" name="category"
                        class="mt-1 py-2 px-4 focus:ring-orange-550 focus:border-orange-550 block w-full shadow-md bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-md"
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
            <div class="grid grid-cols-3 gap-6">
                <div class="col-span-3 lg:col-span-1">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your description here"></textarea>
                </div>
                <div class="col-span-3 lg:col-span-2">
                    <x-jet-label value="{{ __(' Product photo') }}" />

                    <!-- component -->
                    <article aria-label="File Upload Modal"
                        class="relative h-1/2 flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);"
                        ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);"
                        ondragenter="dragEnterHandler(event);">
                        <!-- scroll area -->
                        <section class="p-2 flex flex-col">
                            <header
                                class="border-dashed border-2 border-gray-400 py-4 flex flex-col justify-center items-center">
                                <p class="mb-2 font-semibold text-gray-900 flex flex-wrap justify-center">
                                    <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                                </p>
                                <input id="hidden-input" type="file" multiple class="hidden" />
                                <button id="button"
                                    class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                                    Upload a file
                                </button>
                            </header>

                            <ul id="gallery" class="flex flex-1 flex-wrap mt-2">
                                <li id="empty"
                                    class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                                    <span class="text-small text-gray-500">No files selected</span>
                                </li>
                            </ul>
                        </section>


                    </article>

                    <!-- using two similar templates for simplicity in js code --> 
                    <template id="file-template">
                        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                            <article tabindex="0"
                                class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                                <img alt="upload preview"
                                    class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                                <section
                                    class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                    <h1 class="flex-1 group-hover:text-blue-800"></h1>
                                    <div class="flex">
                                        <span class="p-1 text-blue-800">
                                            <i>
                                                <svg class="fill-current w-4 h-4 ml-auto pt-1"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                                                </svg>
                                            </i>
                                        </span>
                                        <p class="p-1 size text-xs text-gray-700"></p>
                                        <button
                                            class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path class="pointer-events-none"
                                                    d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                            </svg>
                                        </button>
                                    </div>
                                </section>
                            </article>
                        </li>
                    </template>

                    <template id="image-template">
                        <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                            <article tabindex="0"
                                class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                                <img alt="upload preview"
                                    class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                                <section
                                    class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                                    <h1 class="flex-1"></h1>
                                    <div class="flex">
                                        <span class="p-1">
                                            <i>
                                                <svg class="fill-current w-4 h-4 ml-auto pt-"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                                                </svg>
                                            </i>
                                        </span>

                                        <p class="p-1 size text-xs"></p>
                                        <button
                                            class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path class="pointer-events-none"
                                                    d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                                            </svg>
                                        </button>
                                    </div>
                                </section>
                            </article>
                        </li>
                    </template>

                </div>

            </div>
        </form>
    


        <script>
            const fileTempl = document.getElementById("file-template"),
                imageTempl = document.getElementById("image-template"),
                empty = document.getElementById("empty");

            // use to store pre selected files
            let FILES = {};

            // check if file is of type image and prepend the initialied
            // template to the target element
            function addFile(target, file) {
                const isImage = file.type.match("image.*"),
                    objectURL = URL.createObjectURL(file);

                const clone = isImage ?
                    imageTempl.content.cloneNode(true) :
                    fileTempl.content.cloneNode(true);

                //  clone.querySelector("h1").textContent = file.name;
                clone.querySelector("li").id = objectURL;
                clone.querySelector(".delete").dataset.target = objectURL;
                clone.querySelector(".size").textContent =
                    file.size > 1024 ?
                    file.size > 1048576 ?
                    Math.round(file.size / 1048576) + "mb" :
                    Math.round(file.size / 1024) + "kb" :
                    file.size + "b";

                isImage &&
                    Object.assign(clone.querySelector("img"), {
                        src: objectURL,
                        alt: file.name
                    });

                empty.classList.add("hidden");
                target.prepend(clone);

                FILES[objectURL] = file;
            }

            const gallery = document.getElementById("gallery"),
                overlay = document.getElementById("overlay");

            // click the hidden input of type file if the visible button is clicked
            // and capture the selected files
            const hidden = document.getElementById("hidden-input");
            document.getElementById("button").onclick = () => hidden.click();
            hidden.onchange = (e) => {
                for (const file of e.target.files) {
                    addFile(gallery, file);
                }
            };

            // use to check if a file is being dragged
            const hasFiles = ({
                    dataTransfer: {
                        types = []
                    }
                }) =>
                types.indexOf("Files") > -1;

            // use to drag dragenter and dragleave events.
            // this is to know if the outermost parent is dragged over
            // without issues due to drag events on its children
            let counter = 0;

            // reset counter and append file to gallery when file is dropped
            function dropHandler(ev) {
                ev.preventDefault();
                for (const file of ev.dataTransfer.files) {
                    addFile(gallery, file);
                    overlay.classList.remove("draggedover");
                    counter = 0;
                }
            }

            // only react to actual files being dragged
            function dragEnterHandler(e) {
                e.preventDefault();
                if (!hasFiles(e)) {
                    return;
                }
                ++counter && overlay.classList.add("draggedover");
            }

            function dragLeaveHandler(e) {
                1 > --counter && overlay.classList.remove("draggedover");
            }

            function dragOverHandler(e) {
                if (hasFiles(e)) {
                    e.preventDefault();
                }
            }

            // event delegation to caputre delete events
            // fron the waste buckets in the file preview cards
            gallery.onclick = ({
                target
            }) => {
                if (target.classList.contains("delete")) {
                    const ou = target.dataset.target;
                    document.getElementById(ou).remove(ou);
                    gallery.children.length === 1 && empty.classList.remove("hidden");
                    delete FILES[ou];
                }
            };

            // print all selected files
            document.getElementById("submit").onclick = () => {
                alert(`Submitted Files:\n${JSON.stringify(FILES)}`);
                console.log(FILES);
            };

            // clear entire selection
            document.getElementById("cancel").onclick = () => {
                while (gallery.children.length > 0) {
                    gallery.lastChild.remove();
                }
                FILES = {};
                empty.classList.remove("hidden");
                gallery.append(empty);
            };
        </script>
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

{{-- Scripts for this page --}}

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

            {{-- <div x-data="showImage()"
                    class="mt-1 flex justify-center px-6 py-2 border-2 border-green-550 border-dashed rounded-md">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label> 
                
                    <label
                        class="flex flex-col w-full h-40 border-4 border-dashed border-green-200 hover:bg-green-100  hover:border-green-300">
                        <div class="relative flex flex-col items-center justify-center pt-7">
                            <img id="preview" class="absolute inset-0 w-full h-40 object-center object-contain">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-12 h-12 text-green-500 group-hover:text-gray-600" viewBox="0 0 20 20"
                                fill="currentColor">
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
                </div> --}}