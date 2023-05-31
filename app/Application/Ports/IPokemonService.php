<?php

namespace App\Application\Ports;

interface IPokemonService
{
    public function list(): array;
}
