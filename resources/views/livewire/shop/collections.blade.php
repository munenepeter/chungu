<div class="bg-white dark:bg-gray-800 py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
            <div class="flex items-center gap-12">
                <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl dark:text-white">Collections</h2>

                <p class="hidden max-w-screen-sm text-gray-500 dark:text-gray-300 md:block">
                    This is a section of some simple filler text,
                    also known as placeholder text.
                </p>
            </div>

            <a href="#"
                class="inline-block rounded-lg border bg-white dark:bg-gray-700 dark:border-none px-4 py-2 text-center text-sm font-semibold text-gray-500 dark:text-gray-200 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">
                More
            </a>
        </div>

        <section class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-5">

                <div class="sm:col-span-5">
                    <a href="#">
                        @php
                            $image = asset('storage/placeholder-image.jpeg')
                        @endphp
                        <div class="bg-cover text-center overflow-hidden"
                            style="min-height: 300px; background-image: url('{{$image}}')"
                            title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                        <div class="">
                            <a href="#"
                                class="text-xs text-indigo-600 uppercase font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                Election
                            </a>
                            <a href="#"
                                class="block text-gray-900 font-bold text-2xl mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">Revenge
                                of the Never Trumpers</a>
                            <p class="text-gray-700 text-base mt-2">Meet the Republican dissidents fighting to push
                                Donald Trump
                                out of office—and reclaim their party</p>
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-7 grid grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($categories as $category)
                        <article class="">
                            <a href="#">
                                <div class="h-40 bg-cover text-center overflow-hidden"
                                    style="background-image: url('{{$category->image}}')"
                                    title="Woman holding a mug">
                                </div>
                            </a>
                            <a href="#"
                                class="text-gray-900 inline-block font-semibold text-md my-2 hover:text-indigo-600 transition duration-500 ease-in-out">{{$category->name}}</a>
                        </article>
                    @endforeach
                </div>

            </div>
        </section>
    </div>
</div>
