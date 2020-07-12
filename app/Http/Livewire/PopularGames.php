<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PopularGames extends Component
{
    public $popularGames=[];
    

    public function loadPopularGames()
    {
        $after=Carbon::now()->addMonth(2)->timestamp;
        $before=Carbon::now()->subMonth(2)->timestamp;

       
        $popularGamesUnformatted = Cache::remember('popular-games', 7, function () use ($before, $after) {
            // sleep(3);
            return Http::withHeaders(config('services.igdb'))
                ->withOptions([
                'body'=>
                "  fields name, slug,cover.url, first_release_date, popularity, platforms.abbreviation, rating,slug; 
                where platforms = (6,48,130,49)
                &(first_release_date>={$before}
                &first_release_date<{$after});
                  sort popularity desc;
                  limit 12;"
            ])
            ->get('https://api-v3.igdb.com/games/')
            ->json();
        });
        $this->popularGames=$this->formatForView($popularGamesUnformatted);
    } 

    public function render()
    {
        
        return view('livewire.popular-games');
    }

    public function formatForView($games)
    {
        return collect($games)->map(function($game){
            return collect($game)->merge([
                'coverImageUrl'=>Str::replaceFirst('thumb','cover_big',$game['cover']['url']),
                'platforms'=>collect($game['platforms'])->pluck('abbreviation')->implode(', '),
                'rating' => isset($game['rating']) ? round($game['rating']).'%' : null,
               
            ]);    
        })->toArray();
    }
}
