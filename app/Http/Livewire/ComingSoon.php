<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ComingSoon extends Component
{

    public $comingSoon=[];

    public function loadComingSoon()
    {
        $current=Carbon::now()->timestamp;

        $this->comingSoon = Http::withHeaders(config('services.igdb'))
        ->withOptions([
            'body'=>
            "  fields name, slug,cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary; 
            where platforms = (6,48,130,49)
            &(first_release_date>={$current} 
            &popularity>5);
            sort first_release_date asc;
            limit 4;"
        ])
        ->get('https://api-v3.igdb.com/games/')
        ->json();

    }
    public function render()
    {
        return view('livewire.coming-soon');
    }
}
