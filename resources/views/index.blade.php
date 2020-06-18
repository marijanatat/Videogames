@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pb-16">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Popular games
    </h2>
    <div
        class="popular games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-6 gap-12 border-b border-gray-800">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/doom.jpg " class="hover:opacity-75 transition ease-in-out duration-150"
                        alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/avengers.jpg " class="hover:opacity-75 transition ease-in-out duration-150"
                        alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Avengers new</a>
            <div class="text-gray-400 mt-1 ">XBox,PS4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/cyberpunk.jpg "
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Cyberpunk</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/doom.jpg " class="hover:opacity-75 transition ease-in-out duration-150"
                        alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/doom.jpg " class="hover:opacity-75 transition ease-in-out duration-150"
                        alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/doom.jpg " class="hover:opacity-75 transition ease-in-out duration-150"
                        alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/doom.jpg " class="hover:opacity-75 transition ease-in-out duration-150"
                        alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Doom new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/animalcrossing.jpg "
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/animalcrossing.jpg "
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>

        <div class="game mt-8">
            <div class="relative inline-block">
                <a href=""><img src="/images/animalcrossing.jpg "
                        class="hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full"
                    style="right:-20px;bottom:-20px">
                    <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                </div>
            </div>
            <a href="" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">Animal new</a>
            <div class="text-gray-400 mt-1 ">Playstation 4 </div>
        </div>
    </div>
    <!--end popular games-->


    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Recently reviewed
            </h2>
            <div class="recently review container space-y-12 mt-8">
                <div class="game flex shadow-lg bg-gray-800 rounded-lg px-6 py-6">
                    <div class="relative flex-none">
                        <a href=""><img src="/images/doom.jpg "
                                class=" w-48 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px;bottom:-20px">
                            <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                        </div>
                    </div>
                    <div class="ml-6 lg:ml-12">
                        <a href="" class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">Doom
                            new</a>
                        <div class="text-gray-400 mt-1">PS4</div>
                        <p class="mt-6 text-gray-400 text-base hidden lg:block ">Developed by id Software, DOOM Eternal
                            is the direct sequel to DOOM (2016). Experience the ultimate combination of speed and power
                            with the next leap in push-forward, first-person combat.

                            As the DOOM Slayer, return to take your vengeance against the forces of Hell. Set to an
                            all-new pulse pounding soundtrack composed by Mick Gordon, fight across dimensions as you
                            slay new and classic demons with powerful new weapons and abilities.</p>
                    </div>
                </div>

                <div class="game flex shadow-lg bg-gray-800 rounded-lg px-6 py-6">
                    <div class="relative flex-none">
                        <a href=""><img src="/images/animalcrossing.jpg "
                                class=" w-48 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px;bottom:-20px">
                            <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="" class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">Animal
                            new</a>
                        <div class="text-gray-400 mt-1">Nintendo</div>
                        <p class="mt-6 text-gray-400 text-base hidden lg:block">Time passes in Animal Crossing in
                            real-time, as the month, day, season, and time of day matches that of the player's. Holiday
                            seasons come and go in Animal Crossing, just as they would in the real world. Experience the
                            freedom to fish, decorate your house, go bug catching, garden, write letters, and even play
                            original Nintendo NES games in this imaginative, and addictive game.</p>
                    </div>
                </div>

                <div class="game flex shadow-lg bg-gray-800 rounded-lg px-6 py-6">
                    <div class="relative flex-none">
                        <a href=""><img src="/images/doom.jpg "
                                class=" w-48 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full"
                            style="right:-20px;bottom:-20px">
                            <div class="font-semibold text-xs  h-full flex justify-center items-center">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="" class="block text-lg  font-semibold leading-tight hover:text-gray-400 mt-4">Animal
                            new</a>
                        <div class="text-gray-400 mt-1">PS4</div>
                        <p class="mt-6 text-gray-400 text-base hidden lg:block">Developed by id Software, DOOM Eternal
                            is the direct sequel to DOOM (2016). Experience the ultimate combination of speed and power
                            with the next leap in push-forward, first-person combat.

                            As the DOOM Slayer, return to take your vengeance against the forces of Hell. Set to an
                            all-new pulse pounding soundtrack composed by Mick Gordon, fight across dimensions as you
                            slay new and classic demons with powerful new weapons and abilities.</p>
                    </div>
                </div>

            </div>

        </div>


        <!-- most anticipated-->
        <div class="most anticipated mt-12 lg:mt-0 lg:w-1/4">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Most anticipated
            </h2>
            <div class="most antic container space-y-10 mt-8">
                <div class="game flex">
                    <a href=""><img src="/images/doom.jpg "
                            class=" w-16 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                    <div class="ml-4">
                        <a href="" class="hover:text-gray-300">Doom</a>
                        <div class="text-gray-400 text-sm mt-1"> Sep 16,2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href=""><img src="/images/doom.jpg "
                            class=" w-16 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                    <div class="ml-4">
                        <a href="" class="hover:text-gray-300">Doom</a>
                        <div class="text-gray-400 text-sm mt-1"> Sep 16,2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href=""><img src="/images/doom.jpg "
                            class=" w-16 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                    <div class="ml-4">
                        <a href="" class="hover:text-gray-300">Doom</a>
                        <div class="text-gray-400 text-sm mt-1"> Sep 16,2020</div>
                    </div>
                </div>

                <div class="game flex">
                    <a href=""><img src="/images/doom.jpg "
                            class=" w-16 hover:opacity-75 transition ease-in-out duration-150" alt="game cover"></a>
                    <div class="ml-4">
                        <a href="" class="hover:text-gray-300">Doom</a>
                        <div class="text-gray-400 text-sm mt-1"> Sep 16,2020</div>
                    </div>
                </div>
            </div>


            <!--comming soon-->
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#"><img src="/images/cyberpunk.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sept 16, 2020</div>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#"><img src="/images/avengers.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Marvel's Avengers</a>
                        <div class="text-gray-400 text-sm mt-1">Sept 3, 2020</div>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#"><img src="/images/ghost.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Ghost of Tsushima</a>
                        <div class="text-gray-400 text-sm mt-1">July 17, 2020</div>
                    </div>
                </div>
                <div class="game flex">
                    <a href="#"><img src="/images/tlou2.jpg" alt="game cover"
                            class="w-16 hover:opacity-75 transition ease-in-out duration-150"></a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">The Last of Us Part II</a>
                        <div class="text-gray-400 text-sm mt-1">June 19, 2020</div>
                    </div>
                </div>
            </div>
            <!--end of comming soon-->

        </div>
    </div>

</div>
<!--end container-->

@endsection