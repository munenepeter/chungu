<div>
    <div class="col-md-8 mb-2">
        @if($addSource)
        @include('livewire.sources.create')
        @endif
        @if($updateSource)
        @include('livewire.sources.update')
        @endif
    </div>
    <div class="col-md-8">
        <div class="p-4">
            <div class="flex justify-end mb-2">
                @if(!$addSource)
                <x-jet-button wire:click="addSource()" class="">
                    Add New Source
                </x-jet-button>

                @endif
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Location
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Notes
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($sources) > 0)
                        @foreach ($sources as $source)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$source->name}}
                            </th>
                            <td class="px-6 py-4">
                                {{$source->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$source->phone}}
                            </td>
                            <td class="px-6 py-4">
                                {{$source->location}}
                            </td>
                            <td class="px-6 py-4">
                                {{$source->notes}}
                            </td>
                            <td class="px-6 py-4">
                                <button wire:click="editSource({{$source->id}})"><svg xmlns="http://www.w3.org/2000/svg" class="hover:text-green-600 text-green-400 w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg></button>
                                <button wire:onclick="deleteSource({{$source->id}})"><svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer hover:text-red-600 text-red-400 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.8612.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg></button>

                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td class="px-6 py-4" colspan="5" align="center">
                                No Sources Found.
                            </td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>