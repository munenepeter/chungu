<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#799649">
    <title>Chungu {{ empty(request()->segments()) ? 'Collections' : ucwords('| ' . request()->segment(2)) }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
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
    @livewireStyles
</head>

<body class="antialiased text-gray-900">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>
