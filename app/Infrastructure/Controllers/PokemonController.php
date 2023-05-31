<?php

namespace App\Infrastructure\Controllers;

use App\Application\Ports\IPokemonService;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    private IPokemonService $pokemonService;

    public function __construct(IPokemonService $pokemonService)
    {
        $this->pokemonService = $pokemonService;
    }

    public function list()
    {
        return $this->pokemonService->list();
    }
}
