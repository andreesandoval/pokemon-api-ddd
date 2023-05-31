<?php

namespace App\Application\Adapters;

use App\Application\Ports\IPokemonService;
use App\Domain\Ports\IPokemonRepository;

class PokemonService implements IPokemonService
{
    private IPokemonRepository $pokemonRepository;

    public function __construct(IPokemonRepository $pokemonRepository)
    {
        $this->pokemonRepository = $pokemonRepository;
    }

    public function list(): array
    {
        return $this->pokemonRepository->list();
    }
}
