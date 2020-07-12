
    <div class="relative">
        <input type="text" wire:model.debounce.500ms='search'
            class=" pl-8 bg-gray-800 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:shadow-outline "
            placeholder="Search...">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="fill-current text-gray-400 w-4 " viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>


            <div wire:loading class="spinner top-0 right-0 mr-4 mt-4">

            </div>

            @if (strlen($search) >= 2)
        <div class="absolute z-50 bg-gray-800 text-xs rounded w-64 mt-2"
        x-show.transition.opacity.duration.200="isVisible">
            @if (count($searchResults) > 0)
                <ul>
                    @foreach ($searchResults as $game)
                        <li class="border-b border-gray-700">
                            <a 
                                href="{{ route('games.show', $game['slug'])}}"
                                class="block hover:bg-gray-700 flex items-center transition ease-in-out duration-150 px-3 py-3">
                                {{-- @if ($loop->last) @keydown.tab="isVisible=false " @endif
                            > --}}
                                @if (isset($game['cover']))
                                    <img src="{{Str::replaceFirst('thumb', 'cover_small', $game['cover']['url'])}}" alt="cover" class="w-10">
                                @else
                                    <img src="https://via.placeholder.com/264x352" alt="game cover" class="w-10">
                                @endif
                                <span class="ml-4">{{ $game['name'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else 
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif

        </div>
    @endif
    </div>

