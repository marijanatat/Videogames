@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pb-16">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
        Popular games
    </h2>
    <livewire:popular-games>
    <!--end popular games-->


    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Recently reviewed
            </h2>
            <livewire:recently-reviewed>
        </div>


        <!-- most anticipated-->
        <div class="most anticipated mt-12 lg:mt-0 lg:w-1/4">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                Most anticipated
            </h2>
              <livewire:most-anticipated>
          

            <!--comming soon-->
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-12">Coming Soon</h2>
              <livewire:coming-soon>
           
            <!--end of comming soon-->

        </div>
    </div>

</div>
<!--end container-->

@endsection