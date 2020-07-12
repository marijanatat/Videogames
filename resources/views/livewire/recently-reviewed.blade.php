<div wire:init="loadRecentlyReviewed" class="recently review container space-y-12 mt-8">
    @forelse ($recentlyReviewed as $game)
    <div class="game flex shadow-lg bg-gray-800 rounded-lg px-6 py-6">
        <div class="relative flex-none">
            <a href="{{route('games.show',$game['slug'])}}"><img src="{{Str::replaceFirst('thumb','cover_big',$game['cover']['url'])}} "
                    class=" w-48 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                style="right:-20px;bottom:-20px">
                <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
            </div>
        </div>
        <div class="ml-6 lg:ml-12">
            <a href="{{route('games.show',$game['slug'])}}"
                class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">{{$game['name']}}</a>
            <div class="text-gray-400 mt-1">
                @foreach ($game['platforms'] as $platform)
                @if(array_key_exists('abbreviation',$platform))
                {{$platform['abbreviation']}},
                @endif
                @endforeach
            </div>
            @if(isset($game['summary']))
               <p class="mt-6 text-gray-400 text-base hidden lg:block ">
                   {{$game['summary']}},
                
                {{-- {{$game['summary']}} --}}
               </p>
            @endif
           
        </div>
    </div>
    @empty
    @foreach (range(1,3) as $game)
        
    <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
        <div class="relative flex-none">
            <div class="bg-gray-700 w-32 lg:w-44 h-40 xl:h-56"></div>
        </div>
        <div class="ml-6 lg:ml-12">
            <div class="inline-block text-xl font-semibold leading-tight bg-gray-800 text-transparent rounded mt-4">Title goes here</div>
            <div class="mt-8 space-y-4 hidden lg:block">
               <span class="text-transparent bg-gray-800 rounded inline-block">Lorem ipsum jjjhfjgj hfgjjjjgjfjfj</span>
               <span class="text-transparent bg-gray-800 rounded inline-block">Lorem ipsum</span>
               <span class="text-transparent bg-gray-800 rounded inline-block">Lorem ipsum</span>
            </div>
        </div>

    </div>
    @endforeach
    
    @endforelse
</div>