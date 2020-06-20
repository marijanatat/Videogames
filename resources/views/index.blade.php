@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pb-16">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Popular games
    </h2>
    <div
        class="popular games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800">
        @foreach ($popularGames as $game)

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="{{Str::replaceFirst('thumb','cover_big',$game['cover']['url'])}} "
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>

             @if(isset($game['rating']))
                     
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">
                        {{round($game['rating']).'%'}}
                        {{-- @if(array_key_exists('rating',$game))
                        {{round($game['rating']).'%'}},
                        @endif --}}
                        {{-- {{round($game['rating']).'%'}} --}}
                    </div>
                </div>
             @endif
            </div>
            <a href=""
                class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">{{$game['name']}}</a>
            <div class="text-gray-400 mt-1 ">
                @foreach ($game['platforms'] as $platform)
                  @if(array_key_exists('abbreviation',$platform))
                   {{$platform['abbreviation']}},
                   @endif
                @endforeach
            </div>
        </div>
        @endforeach

    </div>
    <!--end popular games-->


    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Recently reviewed
            </h2>
            <div class="recently review container space-y-12 mt-8">
                @foreach ($recentlyReviewed as $game)
                <div class="game flex shadow-lg bg-gray-800 rounded-lg px-6 py-6">
                    <div class="relative flex-none">
                        <a href=""><img src="{{Str::replaceFirst('thumb','cover_big',$game['cover']['url'])}} "
                                class=" w-48 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px;bottom:-20px">
                            <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                        </div>
                    </div>
                    <div class="ml-6 lg:ml-12">
                        <a href=""
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
                        {{-- <p class="mt-6 text-gray-400 text-base hidden lg:block ">
                            @if(array_key_exists('summary',$game))
                               {{$game['summary']}},
                            @endif
                            {{-- {{$game['summary']}} --}}
                        {{-- </p>  --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>


        <!-- most anticipated-->
        <div class="most anticipated mt-12 lg:mt-0 lg:w-1/4">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Most anticipated
            </h2>
            <div class="most antic container space-y-10 mt-8">
                @foreach ($mostAnticipated  as $game)        
                <div class="game flex">
                    <a href=""><img src="{{Str::replaceFirst('thumb','cover_small',$game['cover']['url'])}} "
                            class=" w-16 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                    <div class="ml-4">
                    <a href="" class="hover:text-gray-300">{{$game['name']}}</a>
                        <div class="text-gray-400 text-sm mt-1">{{Carbon\Carbon::parse($game['first_release_date'])->format('M d,Y')}} </div>
                    </div>
                </div>
                @endforeach 
               
            </div> <!--end most anti-->


            <!--comming soon-->
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                @foreach ($comingSoon as $game)
                <div class="game flex">
                    <a href="#"><img src="{{Str::replaceFirst('thumb','cover_small',$game['cover']['url'])}} " alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">{{$game['name']}}</a>
                        <div class="text-gray-400 text-sm mt-1">{{Carbon\Carbon::parse($game['first_release_date'])->format('M d,Y')}}</div>
                    </div>
                </div>
                    
                @endforeach
                     
            </div>
            <!--end of comming soon-->

        </div>
    </div>

</div>
<!--end container-->

@endsection