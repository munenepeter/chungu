@props(['product'])

<div class="bg-gray-50 shadow-md hover:shadow-lg rounded-md">
    <div class="p-4 flex justify-between items-center">
        <div class="rounded-md cursor-pointer h-5 w-5">
            <svg id="like_icon_demo" data-tooltip-target="like_product" data-tooltip-placement="top"
                xmlns="http://www.w3.org/2000/svg" class="h-full w-full text-orange-550" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </div>
        <div class="rounded-md cursor-pointer h-5 w-5">
            <svg id="cart_icon_demo" data-tooltip-target="add_to_bag" data-tooltip-placement="top"
                xmlns="http://www.w3.org/2000/svg" class="h-full w-full text-orange-550" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
        </div>

    </div>
    <div class="my-2">
        <center>
            <a href="{{ route('product.view', $product->defaultUrl->slug) }}">
                <img loading="lazy"
                    class="rounded-lg transform transition duration-500 hover:scale-125 h-48 object-cover object-center"
                    src="{{ $product->thumbnail->getUrl('medium') }}" alt="{{ $product->translateAttribute('name') }}"
                    srcset="">
            </a>
        </center>
    </div>

    <div class="p-4">
        <a href="{{ route('product.view', $product->defaultUrl->slug) }}">
            <h3 class="text-xs text-green-550 ">{{ $product->brand->name }}</h3>
        </a>
        <a href="{{ route('product.view', $product->defaultUrl->slug) }}">
            <p style="font-family: 'Courgette', cursive;" class="text-lg text-orange-550 font-bold">
                {{ $product->translateAttribute('name') }}</p>
        </a>
        <p class="mt-1 text-sm text-gray-600">
            <span class="sr-only">
                Price
            </span>
            <x-product-price class="text-blue-500" :product="$product" />
        </p>
    </div>
</div>
