<?php

declare(strict_types=1);

namespace Valorant;

class Ability
{
    public function __construct(
        private string $nom,
        private string $description
    ) {
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function afficher(): string
    {
        return sprintf('%s : %s', $this->nom, $this->description);
    }
}
