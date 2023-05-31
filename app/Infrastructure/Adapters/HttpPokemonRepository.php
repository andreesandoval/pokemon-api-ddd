<?php

namespace App\Infrastructure\Adapters;

use App\Domain\Entities\Pokemon;
use \App\Domain\Ports\IPokemonRepository;
use Illuminate\Support\Facades\Http;

class HttpPokemonRepository implements IPokemonRepository
{

    public function list(): array
    {
        $response = Http::get('https://pokeapi.co/api/v2/pokemon');
        $results = $response->json()['results'];

        return array_map(function ($result) {
            return new Pokemon($result['name']);
        }, $results);
    }
}
