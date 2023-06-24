<div class="sm:relative"
     x-data="{
         linesVisible: @entangle('linesVisible')
     }">
    <button class="grid w-16 h-16 transition border-l border-gray-100 lg:border-l-transparent hover:opacity-75"
            x-on:click="linesVisible = !linesVisible">
        <span class="sr-only">Cart</span>

        <span class="place-self-center">
            <svg xmlns="http://www.w3.org/2000/svg" style="color:#799649;"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
        </span>
    </button>

    <div class="absolute inset-x-0 top-auto z-50 w-screen max-w-sm px-6 py-8 mx-auto mt-4 bg-white border border-gray-100 shadow-xl sm:left-auto rounded-xl"
         x-show="linesVisible"
         x-on:click.away="linesVisible = false"
         x-transition
         x-cloak>
        <button class="absolute text-gray-500 transition-transform top-3 right-3 hover:scale-110"
                type="button"
                aria-label="Close"
                x-on:click="linesVisible = false">
            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div>
            @if ($this->cart)
                @if ($lines)
                    <div class="flow-root">
                        <ul class="-my-4 overflow-y-auto divide-y divide-gray-100 max-h-96">
                            @foreach ($lines as $index => $line)
                                <li>
                                    <div class="flex py-4"
                                         wire:key="line_{{ $line['id'] }}">
                                        <img class="object-cover w-16 h-16 rounded"
                                             src="{{ $line['thumbnail'] }}">

                                        <div class="flex-1 ml-4">
                                            <p class="max-w-[20ch] text-sm  text-green-550 font-medium">
                                                {{ $line['description'] }}
                                            </p>

                                            <span class="block mt-1 text-xs text-gray-500">
                                                {{ $line['identifier'] }} / {{ $line['options'] }}
                                            </span>

                                            <div class="flex items-center mt-2">
                                                <input class="w-16 p-2 text-xs transition-colors border border-green-100 rounded-lg hover:border-green-200"
                                                       type="number"
                                                       wire:model="lines.{{ $index }}.quantity" />

                                                <p class="ml-2 text-xs">
                                                    @ {{ $line['unit_price'] }}
                                                </p>

                                                <button class="p-2 ml-auto text-red-600 transition-colors rounded-lg hover:bg-red-100 hover:text-red-700"
                                                        type="button"
                                                        wire:click="removeLine('{{ $line['id'] }}')">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="w-4 h-4"
                                                         fill="none"
                                                         viewBox="0 0 24 24"
                                                         stroke="currentColor">
                                                        <path stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    @if ($errors->get('lines.' . $index . '.quantity'))
                                        <div class="p-2 mb-4 text-xs font-medium text-center text-red-700 rounded bg-red-50"
                                             role="alert">
                                            @foreach ($errors->get('lines.' . $index . '.quantity') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @else
                    <p class="py-4 text-sm font-medium text-center text-green-800">
                        Your cart is empty
                    </p>
                @endif

                <dl class="flex flex-wrap pt-4 mt-6 text-sm border-t border-gray-100">
                    <dt class="w-1/2 font-medium text-green-900">
                        Sub Total
                    </dt>

                    <dd class="w-1/2 text-right text-green-900">
                        {{ $this->cart->subTotal->formatted() }}
                    </dd>
                </dl>
            @else
                <p class="py-4 text-sm font-medium text-center text-green-800">
                    Your cart is empty
                </p>
            @endif
        </div>

        @if ($this->cart)
            <div class="mt-4 space-y-4 text-center">
                <button class="block w-full p-3 text-sm font-medium text-orange-550 border border-orange-550 rounded-lg hover:ring-1 hover:ring-orange-600"
                        type="button"
                        wire:click="updateLines">
                    Update Cart
                </button>

                <a class="block w-full p-3 text-sm font-medium text-center text-white bg-orange-550 rounded-lg hover:opacity-95"
                   href="{{ route('checkout.view') }}">
                    Checkout
                </a>

                <a class="inline-block text-sm font-medium text-gray-600 underline hover:text-gray-500"
                   href="{{ url('/') }}">
                    Continue Shopping
                </a>
            </div>
        @endif
    </div>
</div>
