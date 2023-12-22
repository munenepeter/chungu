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

    <meta name="title" content="Chungu Collections— All your jewellery in one place">
    <meta name="description"
        content="Chungu has all your beloved jewels, from necklaces to rings, to belts and bracelets all that within Nairobi">
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


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen">
        @livewire('nav')
        {{ $slot }}
        <x-footer/>
    </body>
</html>