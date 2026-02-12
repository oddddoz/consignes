<?php

declare(strict_types=1);

namespace Valorant;

class Agent
{
    /** @var Ability[] */
    private array $capacites = [];

    private int $ultimateCharge = 0;

    public function __construct(
        private string $nom,
        private string $role
    ) {
    }

    public function ajouterCapacite(Ability $ability): void
    {
        $this->capacites[] = $ability;
    }

    public function chargerUltimate(int $points): void
    {
        $this->ultimateCharge = min(7, $this->ultimateCharge + $points);
    }

    public function ultimateDisponible(): bool
    {
        return $this->ultimateCharge >= 7;
    }

    public function decrire(): string
    {
        $capacites = array_map(fn (Ability $ability) => $ability->getNom(), $this->capacites);
        $capacitesTexte = implode(', ', $capacites);

        return sprintf(
            "%s (%s) — Capacités : %s",
            $this->nom,
            $this->role,
            $capacitesTexte ?: 'aucune pour le moment'
        );
    }
}
