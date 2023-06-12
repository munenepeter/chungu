<form {{ $attributes->merge(['class' => 'w-full relative']) }}
      action="{{ route('search.view') }}">
    <input name="term"
           type="search"
           placeholder="Search for products"
           class="w-full pl-10 text-sm border-b border-green-550 rounded-lg text-orange-550 placeholder:text-green-550 focus:outline-none focus:border-orange-550 focus:ring-1 focus:ring-orange-500"
           value="{{ $this->term }}" />

    <button class="absolute p-2 text-green-550 transition -translate-y-1/2 rounded-md left-1 top-1/2 hover:bg-orange-550">
        <span class="sr-only">Submit Search</span>

        <svg xmlns="http://www.w3.org/2000/svg" style="color:#799649;"
             class="w-4 h-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </button>
</form>
