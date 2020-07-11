<div wire:init="loadPopularGames" class="popular games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800">
@forelse ($popularGames as $game)
    <div class="game mt-8">
      <div class="relative inline-block">
        <a href="{{route('games.show',$game['slug'])}}"><img src="{{$game->coverImageUrl}} "
                class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>

       @if($game['rating'])

        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
            style="right:-20px;bottom:-20px">
            <div class="font-semibold text-xs  h-full flex justify-center items-center">
                {{-- {{round($game['rating']).'%'}} --}}
                 @if(array_key_exists('rating',$game))
                {{round($game['rating']).'%'}}
                @endif 
                 {{-- {{round($game['rating']).'%'}}  --}}
             </div>
        </div>
        @endif
       </div>
    <a href="{{route('games.show',$game['slug'])}}"
        class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{$game['name']}}</a>
    <div class="text-gray-400 mt-1 ">
      {{$game['platforms ']}}
    </div>
</div>
@empty
    @foreach (range(1,12) as $game)      
        <div class="game mt-8">
            <div class="relative inline-block">
                <div class="bg-gray-800 h-56 w-44 "></div>
            </div>
            <div class="block text-xl text-transparent leading-tight bg-gray-800 rounded mt-4">Title goes here</div>
            <div class="text-transparent rounded mt-3 bg-gray-800 inline-block">PS4, PC, Switch</div>   
        </div>
    
    @endforeach
 
@endforelse  
 </div>  



   




