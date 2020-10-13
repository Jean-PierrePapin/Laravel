<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('freeCodeGram') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            
            </div>
        </div>
    </div>
     --}}

    <div class="container mx-auto p-10">
        <div class="flex flex-row grid grid-cols-3">
            <div class="px-10 col-span-1 pl-10 items-center">
                <img src="https://scontent-lis1-1.cdninstagram.com/v/t51.2885-19/s320x320/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lis1-1.cdninstagram.com&_nc_ohc=cb5TpiVd9HQAX_UqbV_&oh=a31b55046f0256068ac7a5bc1f326a4e&oe=5FAAA79F" 
                style="border-radius: 50%;" 
                class="h-40">
            </div>

            <div class="px-10 col-span-2 pt-5">

                <div class="pb-5"><h1>freecodecamp</h1></div>

                <div class="flex flex-row">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>

            </div>

        </div>
    </div>


</x-app-layout>
