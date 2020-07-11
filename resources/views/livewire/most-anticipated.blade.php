<div wire:init="loadMostAnticipated" class="most antic container space-y-10 mt-8">
    @forelse ($mostAnticipated  as $game)        
    <div class="game flex">
        <a href=""><img src="{{Str::replaceFirst('thumb','cover_small',$game['cover']['url'])}} "
                class=" w-16 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
        <div class="ml-4">
        <a href="" class="hover:text-gray-300">{{$game['name']}}</a>
            <div class="text-gray-400 text-sm mt-1">{{Carbon\Carbon::parse($game['first_release_date'])->format('M d,Y')}} </div>
        </div>
    </div>
    @empty

    @foreach (range(1,4) as $game)  
        <div class="game flex">
            <div class="bg-gray-800 w-16 h-20 flex-none"></div>
                <div class="ml-4">
                    <div class="text-transparent bg-gray-700 rounded leading-tight ">Title goes here hhhhh ggggg</div>
                    <div class="text-transparent bg-gray-700 rounded inline-block mt-3 text-sm">Sept ,14 </div>
                </div>
        </div>
    @endforeach
    
    @endforelse
   
</div> <!--end most anti-->
