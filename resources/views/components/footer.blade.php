<footer id="footer" class="border-t bg-gray-50 left-50 w-full">
    <div class="px-4">
        <div class="md:flex md:justify-between">
            <div class="hidden md:block p-2">
                <p style="font-family: 'Courgette', cursive;"
                    class="text-asparagus-500 hover:text-japonica-500 text-6xl font-black ">Chungu</p>
                <p class="text-asparagus-500 text-lg font-bold whitespace-nowrap hover:text-japonica-500">COLLECTIONS</p>
            </div>
            <article class="grid md:grid-cols-3 grid-cols-2 p-2">

                <div class="sm:hidden">
                    <p style="font-family: 'Courgette', cursive;"
                        class="text-asparagus-500 hover:text-japonica-500 text-5xl font-black ">Chungu</p>
                    <p class="text-asparagus-500 text-md font-bold whitespace-nowrap hover:text-japonica-500">
                        COLLECTIONS</p>
                </div>
                <ul class="space-y-2">
                    <li>
                        <p class="text-sm uppercase text-japonica-500 font-bold">Links</p>
                    </li>
                    <li>
                        <a class="my-3 text-asparagus-500 hover:underline"
                            href="{{ route('collections') }}">Collections</a>
                    </li>
                    <li>
                        <a class="my-3 text-asparagus-500 hover:underline" href="/blog">Blog
                            <sup class="text-teal-600 text-xs hover:no-underline">New</sup>
                        </a>
                    </li>

                    <li>

                        @auth
                            <a href="{{ url('/admin') }}"
                                class="my-3 text-asparagus-500 hover:underline py-2 hover:text-japonica-500">Dashboard</a>
                        @else
                            <a href="{{ url('admin/login') }}"
                                class="my-3 text-asparagus-500 hover:underline py-2 hover:text-japonica-500">Log in</a>
                        @endauth
                    </li>


                </ul>
                <ul class="space-y-2">
                    <li>
                        <p class="text-sm uppercase text-japonica-500 font-bold">Support</p>
                    </li>
                    <li>
                        <a class="text-asparagus-500 hover:underline" href="{{ route('help center') }}">Help Center
                        </a>
                    </li>
                    <li>
                        <a class="text-asparagus-500 hover:underline" href="{{ route('privacy policy') }}">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a class="text-asparagus-500 hover:underline" href="{{ route('faqs') }}">FAQs</a>
                    </li>

                </ul>
                <ul class="space-y-2 md:mt-0 mt-4">
                    <li>
                        <p class="text-sm uppercase text-japonica-500 font-bold">Contact us</p>
                    </li>
                    <li>
                        <a class="text-asparagus-500 hover:underline" href="tel:+2547 426 41376">+2547 426 41376</a>
                    </li>
                    <li>
                        <a class="text-asparagus-500 hover:underline" href="tel:+2547 980 55244">+2547 980 55244</a>
                    </li>
                    <li>
                        <a class="text-teal-600 hover:underline" href="mailto:sales@chungu.co.ke ">sales@chungu.co.ke
                        </a>
                    </li>
                </ul>
            </article>
        </div>
    </div>
    <div class="mt-2">
        <div class="flex px-3 m-auto border-t text-gray-800 text-sm flex-col max-w-screen-lg items-center">
            <div class="md:flex-auto md:flex-row-reverse my-2 flex-row flex"> <a target="_blank"
                    rel="noopener noreferrer" href="https://www.pinterest.com/chungucollections/" class="w-6 mx-1"
                    title="Pinterest"> <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6 text-asparagus-500 hover:text-japonica-500" fill="currentColor"
                        viewBox="0 0 32 32" class="w-4 h-4">
                        <path
                            d="M16.021 0c-8.828 0-15.984 7.156-15.984 15.984 0 6.771 4.214 12.552 10.161 14.88-0.141-1.266-0.266-3.203 0.052-4.583 0.292-1.25 1.875-7.943 1.875-7.943s-0.479-0.964-0.479-2.375c0-2.219 1.292-3.88 2.891-3.88 1.365 0 2.026 1.021 2.026 2.25 0 1.37-0.87 3.422-1.323 5.323-0.38 1.589 0.797 2.885 2.365 2.885 2.839 0 5.026-2.995 5.026-7.318 0-3.813-2.75-6.49-6.677-6.49-4.547 0-7.214 3.417-7.214 6.932 0 1.375 0.526 2.854 1.188 3.651 0.13 0.161 0.146 0.302 0.109 0.464-0.12 0.5-0.391 1.599-0.443 1.818-0.073 0.297-0.229 0.359-0.536 0.219-1.99-0.922-3.245-3.839-3.245-6.193 0-5.036 3.667-9.672 10.563-9.672 5.542 0 9.854 3.958 9.854 9.229 0 5.516-3.474 9.953-8.307 9.953-1.62 0-3.141-0.839-3.677-1.839l-1 3.797c-0.359 1.391-1.339 3.135-2 4.193 1.5 0.458 3.078 0.714 4.734 0.714 8.813 0 15.979-7.151 15.979-15.984 0-8.828-7.167-15.979-15.979-15.979z">
                        </path>
                    </svg> </a> <a target="_blank" href="https://tiktok.com/chungucollections" class="w-6 mx-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor"
                        class="w-6 h-6 text-asparagus-500 hover:text-japonica-500">
                        <path
                            d="M9 4C6 4 4 6 4 9v32c0 3 2 5 5 5h32c3 0 5-2 5-5V9c0-3-2-5-5-5H9zm0 2h32c2 0 3 1 3 3v32c0 2-1 3-3 3H9c-2 0-3-1-3-3V9c0-2 1-3 3-3zm17 4a1 1 0 0 0-1 1v20c0 1-2 3-4 3l-3-3c0-2 2-4 3-4h1a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-1a10 10 0 1 0 10 10V21a8 8 0 0 0 6 2 1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1c-3-1-6-3-6-6a1 1 0 0 0-1-1h-4zm1 2h2c1 3 4 6 7 6v3c-2 0-4-1-5-3a1 1 0 0 0-2 1v12a8 8 0 1 1-15 0c0-4 3-8 7-8v2c-3 1-5 3-5 6 0 2 3 5 5 5 3 0 6-2 6-5V12z" />
                    </svg> </a> <a target="_blank" href="https://twitter.com/chungucoll" class="w-6 mx-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                        class="w-6 h-6 text-asparagus-500 hover:text-japonica-500">
                        <path
                            d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z">
                        </path>
                    </svg> </a> <a target="_blank" href="https://www.facebook.com/chungucollections/" class="w-6 mx-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                        class="w-6 h-6 text-asparagus-500 hover:text-japonica-500">
                        <path
                            d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z">
                        </path>
                    </svg> </a> <a href="https://www.instagram.com/chungucollections/" class="w-6 mx-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32"
                        class="w-6 h-6 text-asparagus-500 hover:text-japonica-500">
                        <path
                            d="M31.937 6.093c-1.177 0.516-2.437 0.871-3.765 1.032 1.355-0.813 2.391-2.099 2.885-3.631-1.271 0.74-2.677 1.276-4.172 1.579-1.192-1.276-2.896-2.079-4.787-2.079-3.625 0-6.563 2.937-6.563 6.557 0 0.521 0.063 1.021 0.172 1.495-5.453-0.255-10.287-2.875-13.52-6.833-0.568 0.964-0.891 2.084-0.891 3.303 0 2.281 1.161 4.281 2.916 5.457-1.073-0.031-2.083-0.328-2.968-0.817v0.079c0 3.181 2.26 5.833 5.26 6.437-0.547 0.145-1.131 0.229-1.724 0.229-0.421 0-0.823-0.041-1.224-0.115 0.844 2.604 3.26 4.5 6.14 4.557-2.239 1.755-5.077 2.801-8.135 2.801-0.521 0-1.041-0.025-1.563-0.088 2.917 1.86 6.36 2.948 10.079 2.948 12.067 0 18.661-9.995 18.661-18.651 0-0.276 0-0.557-0.021-0.839 1.287-0.917 2.401-2.079 3.281-3.396z">
                        </path>
                    </svg> </a> </div>
            <div class="text-center text-japonica-800 md:text-sm text-xs">&copy; 2020 - {{ date('Y') }}, All rights
                reserved | Chungu Collections
            </div>
        </div>
    </div>
</footer>
