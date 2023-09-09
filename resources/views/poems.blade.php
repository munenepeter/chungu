<x-poem-layout>


    <section class="bg-asparagus-500 md:h-64 lg:72 pt-8  md:mt-16 mt-8 "
        style="background-image: linear-gradient(135deg, rgb(152, 179, 104) 0%, rgb(74, 93, 46) 100%);">
        <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-2">
            <div class="flex flex-col justify-between lg:flex-row px-5">
                <div class="mb-8 lg:max-w-lg lg:pr-5 lg:mb-0">
                    <h1 class="text-asparagus-100 font-extrabold md:text-4xl text-3xl">New beautiful and unique poetry,
                        every week</h1>
                    <h1 class="hidden text-asparagus-100 font-extrabold md:text-4xl text-3xl">New poetry, every week</h1>
                </div>
                <div class="pb-5 lg:w-2/5">
                    <p class='pb-6 text-asparagus-50'>Sign up to get new poetry playlist in your inbox every week. You'll
                        receive set of poems around a different theme, with a focus on contemporary poets. It's free,
                        and you can
                        unsubsribe anytime. Read more about us</p>

                    <form id="subscribe-form" method="POST" class='flex sm:flex-row md:p-0'>
                        <input id="subscribe-input" type="email"
                            class='px-2 md:px-10 py-2 md:py-2 md:text-lg transition-all duration-300 focus:outline-none
                        bg-asparagus-50 text-asparagus-950 placeholder:text-asparagus-950
                        focus:border-asparagus-500 focus:ring-asparagus-500 focus:ring-1'
                            placeholder='Enter your email' name="subscriber" required />
                        <button id="subscribeBtn" type="submit"
                            class="ml-1 px-2 md:px-6 py-2 md:py-3 font-semibold bg-japonica-400 text-japonica-950">Subscribe</button>
                    </form>
                    <p id="subscribe-response" class="py-2 text-red-300 text-sm"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest poems -->
    <section class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
        <div class="container md:flex md:justify-around mx-auto">
            <div class="font-medium col-span-2 p-2 mb-2">
                <h1 class=" mb-2 uppercase text-japonica-500">Featured Poem</h1>
                <article class="w-full max-w-2xl">
                    <a href="/poems/"
                        class="block mb-2 text-3xl font-extrabold leading-tight text-japonica-900 lg:mb-6 lg:text-4xl hover:underline">
                        Lorem</a>
                    <a href="#" rel="author" class="text-sm font-bold text-japonica-900 uppercase">by
                        munene peter</a>
                    <div class="prose md:mt-4 mt-2 lead text-japonica-950">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio explicabo amet nostrum facilis
                        quos odit magnam velit corporis suscipit voluptatem minima rerum quam culpa impedit animi
                        officia maxime nobis, tenetur possimus! Praesentium libero corporis maxime cum vel magni, totam
                        explicabo recusandae quasi vitae reiciendis. Iste in minima tempora doloribus voluptatem?
                    </div>
                </article>
            </div>

            <div class="col-span-2 md:border-none border-t md:py-0 py-4">
                <h1 class="mb-2 uppercase text-japonica-500">Latest Poems</h1>

                @for ($i = 0; $i < 4; $i++)
                    <article>
                        <div class="md:my-2 inline-flex items-center">
                            <div class="mr-3 grid grid-cols-1 justify-items-center bg-japonica-100 w-12 rounded-md">
                                <div class='md:text-3xl text-2xl text-asparagus-900'>0{{ $i }}</div>
                            </div>
                            <div>
                                <a href="/poems/" rel="author"
                                    class="text-xl font-bold text-asparagus-900 hover:underline">{{ $i }}</a>
                                <p class="text-sm font-light text-asparagus-500 dark:text-asparagus-400 italic">by
                                    {{ $i }}
                                </p>
                            </div>
                        </div>
                    </article>
                @endfor
            </div>

        </div>

    </section>

    <!-- Categories -->
    <section
        class="bg-asparagus-100 px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">
        <h1 class="mb-2 uppercase text-japonica-500">Most viewed categories</h1>
        <div class="grid md:grid-cols-4 grid-cols-2 gap-3">
            @for ($i = 0; $i < 4; $i++)
                <div class="mx-auto mt-6 w-40  overflow-hidden">
                    <img class="md:h-56 h-48 w-full object-cover object-center"
                        src="https://dummyimage.com/200x400/f2bbaf/799649" />
                    <div class="mt-2">
                        <a href="#" class="mb-2 text-xl font-bold text-gray-900">{{ $i }}</a>
                        <p class="mb-2 text-sm font-light text-gray-500 dark:text-gray-400 italic">12 items
                        </p>
                    </div>
                </div>
            @endfor
        </div>

    </section>
    <!-- qoutes -->
    <section class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-20 lg:py-8">

        <h1 class="lateral-txt mb-2 uppercase text-japonica-500">Latest Qoutes</h1>
        <div class="font-medium md:col-span-3 p-2 mb-2">
            <article class="w-full max-w-2xl">
                <p class="md:mt-4 mt-2 lead italic">"when you compliment others genuinely, you activate the good that
                    was always with them and permit then to become great"</p>
                <a href="#" rel="author" class="pt-2 font-semibold text-gray-900 ">- anonymous</a>
            </article>
        </div>


    </section>



</x-poem-layout>
