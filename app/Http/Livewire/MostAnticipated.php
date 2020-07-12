<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MostAnticipated extends Component
{

    public $mostAnticipated=[];

    public function loadMostAnticipated()
    {

        $current=Carbon::now()->timestamp;
        $afterFourMonths=Carbon::now()->addMonth(4)->timestamp;

        $this->mostAnticipated = Http::withHeaders(config('services.igdb'))
        ->withOptions([
            'body'=>
            "  fields name, slug,cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary; 
            where platforms = (6,48,130,49)
            &(first_release_date>={$current}
            &first_release_date<{$afterFourMonths});
            sort popularity desc;
            limit 4;"
        ])
        ->get('https://api-v3.igdb.com/games/')
        ->json();
    }
    
    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
