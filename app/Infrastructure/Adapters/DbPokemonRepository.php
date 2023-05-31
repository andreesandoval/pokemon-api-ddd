<?php

namespace App\Infrastructure\Adapters;

use \App\Domain\Ports\IPokemonRepository;

class DbPokemonRepository implements IPokemonRepository
{

    public function list(): array
    {
        return [];
    }
}
