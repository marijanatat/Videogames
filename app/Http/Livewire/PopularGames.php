<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class PopularGames extends Component
{
    public $popularGames=[];
    

    public function loadPopularGames()
    {
        $after=Carbon::now()->addMonth(2)->timestamp;
        $before=Carbon::now()->subMonth(2)->timestamp;

        $this->popularGames = Cache::remember('popular-games', 7, function () use ($before, $after) {
            // sleep(3);
            return Http::withHeaders(config('services.igdb'))
                ->withOptions([
                'body'=>
                "  fields name, cover.url, first_release_date, popularity, platforms.abbreviation, rating,slug; 
                where platforms = (6,48,130,49)
                &(first_release_date>={$before}
                &first_release_date<{$after});
                  sort popularity desc;
                  limit 12;"
            ])
            ->get('https://api-v3.igdb.com/games/')
            ->json();
        });
    } 

    public function render()
    {
        
        return view('livewire.popular-games');
    }
}
