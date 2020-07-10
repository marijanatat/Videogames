<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecentlyReviewed extends Component
{

    public $recentlyReviewed=[];

    public function loadRecentlyReviewed()
    {
      
        $before=Carbon::now()->subMonth(2)->timestamp;
        $current=Carbon::now()->timestamp;
      

        $this->recentlyReviewed = Http::withHeaders(config('services.igdb'))
        ->withOptions([
            'body'=>
            "  fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating, rating_count, summary; 
            where platforms = (6,48,130,49)
            &(first_release_date>={$before}
            &first_release_date<{$current} 
            &rating_count>5);
            sort popularity desc;
            limit 3;"
        ])
        ->get('https://api-v3.igdb.com/games/')
        ->json();
    }
    public function render()
    {
        return view('livewire.recently-reviewed');
    }
}
