<?php

namespace App\Domain\Ports;

interface IPokemonRepository
{
    public function list(): array;
}
