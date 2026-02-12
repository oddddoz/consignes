<?php

declare(strict_types=1);

require_once __DIR__ . '/src/Ability.php';
require_once __DIR__ . '/src/Agent.php';
require_once __DIR__ . '/src/Team.php';

use Valorant\Ability;
use Valorant\Agent;
use Valorant\Team;

// Création de quelques capacités prédéfinies
$updraft = new Ability('Updraft', 'Jett s’élève rapidement pour prendre de la hauteur.');
$dash = new Ability('Tailwind', 'Dash éclair pour surprendre les adversaires.');
$smoke = new Ability('Cloudburst', 'Petite fumée pour masquer la vision.');

// Exemple concret d’agent
$jett = new Agent('Jett', 'Duelist');
$jett->ajouterCapacite($updraft);
$jett->ajouterCapacite($dash);
$jett->ajouterCapacite($smoke);

// Chargement progressif de l’ultimate
$jett->chargerUltimate(3);
$jett->chargerUltimate(2);
$jett->chargerUltimate(4); // dépassement pour tester la limite de 7

// Création d’une équipe et ajout de l’agent
$valorantTeam = new Team('Radiant Squad');
$valorantTeam->ajouterAgent($jett);

echo "===== Aperçu des capacités =====\n";
foreach ([$updraft, $dash, $smoke] as $ability) {
    echo $ability->afficher() . "\n";
}

echo "\n===== Agent =====\n";
echo $jett->decrire();
echo "\nUltimate prêt ? " . ($jett->ultimateDisponible() ? 'oui' : 'non') . "\n";

echo "\n===== Équipe =====\n";
echo $valorantTeam->decrire();
echo "\n";
