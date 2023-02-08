<x-guest-layout>
    <div class="pt-4 bg-gray-100">
        <div class="w-full min-h-screen flex flex-col items-center  pt-6 sm:pt-0">
            <div> <x-jet-authentication-card-logo /> </div>
            <div class=" bg-white  prose min-w-full p-4">
                <div class="border bg-gray-50 p-4 rounded-md"> {!! $policy !!} </div>
            </div>
        </div>
    </div>
</x-guest-layout>