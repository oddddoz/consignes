<?php

declare(strict_types=1);

namespace Valorant;

class Team
{
    /** @var Agent[] */
    private array $agents = [];

    public function __construct(private string $nom)
    {
    }

    public function ajouterAgent(Agent $agent): void
    {
        $this->agents[] = $agent;
    }

    public function decrire(): string
    {
        if (empty($this->agents)) {
            return $this->nom . ' est vide pour le moment.';
        }

        $liste = array_map(fn (Agent $agent) => $agent->decrire(), $this->agents);

        return $this->nom . " contient:\n- " . implode("\n- ", $liste);
    }
}
