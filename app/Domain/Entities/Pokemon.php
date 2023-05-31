<?php

namespace App\Domain\Entities;

readonly class Pokemon
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    //Evitar las entidades de dominio anémicas
    //https://martinfowler.com/bliki/AnemicDomainModel.html
    public function attack(): string
    {
        return 'Attack!';
    }

    public function defend(): string
    {
        return 'Defend!';
    }
}
