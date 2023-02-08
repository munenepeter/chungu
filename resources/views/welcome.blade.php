<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chungu</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="sticky top-0 z-10 w-full bg-white border-gray-200 text-green-550">
        <div class="flex flex-wrap justify-between items-center mx-auto  p-2">
            <a href="/" class="p-2 block hover:text-pink-550 ">
                <p style="font-family: 'Cedarville Cursive', cursive;" class="ml-2 hover:text-pink-550 text-4xl font-black dark:text-white">Chungu</p>
                <p class="text-lg font-bold whitespace-nowrap dark:text-white hover:text-pink-550">COLLECTIONS</p>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="text-green-550 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="text-green-550 hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium items-center">


                    <li>
                        <a href="/#about" class="text-md block py-2 pr-4 pl-3 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>

                    <li>
                        <a href="/#testimonials" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimonials</a>
                    </li>
                    @if (Route::has('login'))
                    <li>
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Log in</a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-md block py-2 pr-4 pl-3  border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 hover:text-pink-550 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Register</a>
                        @endif
                        @endauth
                    </li>
                    @endif





                    <li>

                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 ">

                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200 text-green-550" aria-labelledby="dropdownDefault">

                                <li>
                                    <a href="/dashboard" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Earnings</a>
                                </li>
                                <li>
                                    <a href="/signout" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550">Sign out</a>
                                </li>

                                <li>
                                    <a href="/signin" class="text-green-550 block px-4 py-2 hover:bg-gray-100 md:hover:text-pink-550 ">Admin Sign in</a>
                                </li>


                            </ul>

                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </nav>





    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">




    </div>

</body>

</html>