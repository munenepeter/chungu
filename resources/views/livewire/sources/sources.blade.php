<div>
    <div class="col-md-8 mb-2">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif
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
                                <button wire:click="editSource({{$source->id}})" class="btn btn-primary btn-sm">Edit</button>
                                <button wire:onclick="deleteSource({{$source->id}})" class="btn btn-danger btn-sm">Delete</button>
                                <x-jet-danger-button></x-jet-danger-button>
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