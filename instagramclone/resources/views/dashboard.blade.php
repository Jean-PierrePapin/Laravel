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
        <div class="grid grid-cols-3 grid-rows-5">

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

                <div class="pt-4 font-bold">freeCodeCamp.org</div>
                <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
                <div><a href="#">www.freecodecamp.org</a></div>

            </div>

            

            <div class="p-4">
                <img src="https://scontent-lis1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.112.929.929a/s640x640/121302633_1416954018498485_2495968877943777077_n.jpg?_nc_ht=scontent-lis1-1.cdninstagram.com&_nc_cat=105&_nc_ohc=ExNaxDzMA6wAX9WPPiq&oh=6d0da57dcd14c78f74bfc9849bcd7e93&oe=5FAF361B" alt="">                    
            </div>

            <div class="p-4">
                <img src="https://scontent-lis1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/121057180_383931569662048_9123183366007734115_n.jpg?_nc_ht=scontent-lis1-1.cdninstagram.com&_nc_cat=104&_nc_ohc=cKJOEjSJUAIAX8O0bdK&oh=17d90352d8fc29fdac356fb4bb830339&oe=5FB219B0" alt="">                    
            </div>

            <div class="p-4">
                <img src="https://scontent-lis1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.112.929.929a/s640x640/120983981_413931279773078_4677451009993420567_n.jpg?_nc_ht=scontent-lis1-1.cdninstagram.com&_nc_cat=102&_nc_ohc=yexerUSttw4AX-wgXUG&oh=dcea4ec554c57de558fdbd3126667501&oe=5FAED788" alt="">                    
            </div>

            


        </div>
    </div>


</x-app-layout>
