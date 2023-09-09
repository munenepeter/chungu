<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#799649">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">

    <title>Chungu {{ empty(request()->segments()) ? 'Collections' : ucwords('| ' . request()->segment(1)) }}</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}">

    {{-- SEO --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="theme-color" content="#799649" />
    <meta name="description"
        content="Discover the soulful world of poetry at Chungu Poems. Immerse yourself in heartfelt verses that touch upon love, life, and everything in between. Explore and let our words resonate with your heart's emotions." />

    <meta name="keywords"
        content="Chungu, chungu, chungu collections, Accessories, jewellery, cheap, jewellery, kenyan earrings, gift shop, nairobi jewellery, simple earrings, beautiful earrings, necklaces, anklets, bracelets, offers, buy earrings, online shop, ">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://chungu.co.ke/">
    <meta property="og:title" content="Chungu — All your jewellery in one place">
    <meta property="og:description"
        content="Chungu has all your beloved jewels, from necklaces to rings, to belts and bracelets all that within Nairobi">
    {{-- <meta property="og:image" content="{{ asset('imgs/offer/03.jpeg')}}"> --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://chungu.co.ke/">
    <meta property="twitter:title" content="Chungu — All your jewellery in one place">
    <meta property="twitter:description"
        content="Chungu has all your beloved jewels, from necklaces to rings, to belts and bracelets all that within Nairobi">
    {{-- <meta property="twitter:image" content="{{ asset('imgs/offer/03.jpeg'); }}"> --}}



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">


    <!-- Fonts -->


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<style>
    body {
        font-family: 'EB Garamond', serif !important;
    }
</style>

<body class="font-sans antialiased min-h-screen">

    <nav class="bg-asparagus-500 fixed w-full top-0 -mb-2"
        style=" background-image: linear-gradient(135deg, rgb(152, 179, 104) 0%, rgb(74, 93, 46) 100%);">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center text-japonica-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 mr-3 hidden md:block">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="self-center md:text-2xl text-lg font-semibold whitespace-nowrap ">Chungu Poems</span>
            </a>

            <ul class="flex md:space-x-8 space-x-2 bg-transparent md:font-medium uppercase text-japonica-50">
                <li>
                    <a href="/poems/about"
                        class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-japonica-50 md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">About</a>
                </li>
                <li>
                    <a href="poems/collection"
                        class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-japonica-50 md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">Poems</a>
                </li>
                <li>
                    <a href="poems/reviews"
                        class="md:text-base text-xs block py-2 pl-1 md:pl-3 pr-2 md:pr-4 text-japonica-50  md:hover:bg-transparent md:hover:text-japonica-500 md:p-0 md:dark:hover:text-japonica-500">Reviews</a>
                </li>

            </ul>

        </div>
    </nav>
    <main>
        {{ $slot }}
    </main>

    <footer class="bottom-0 left-0 w-full z-10"
        style=" background-image: linear-gradient(135deg, rgb(152, 179, 104) 0%, rgb(74, 93, 46) 100%);">
        <div class="w-full mx-auto max-w-screen-xl p-2 md:flex md:items-center md:justify-between">
            <span class="text-sm text-japonica-100">&copy; 2020 -
                <?= date('Y') ?> <a href="https://dev.chungu.co.ke" class="hover:underline">Chungu Developers</a>.
                All
                Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center text-sm font-medium text-japonica-200  sm:mt-0 text-center">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
    </footer>


    @stack('modals')
    @livewireScripts
</body>

</html>
