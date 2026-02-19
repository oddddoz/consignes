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

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant - PHP OOP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #ff4655;
            padding-bottom: 10px;
        }
        .section {
            background: white;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .ability {
            margin: 10px 0;
            padding: 10px;
            background: #f9f9f9;
            border-left: 3px solid #ff4655;
        }
        .info {
            margin: 10px 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <h1>🎮 Valorant - Exemple PHP OOP</h1>
    
    <div class="section">
        <h2>Aperçu des capacités</h2>
        <?php foreach ([$updraft, $dash, $smoke] as $ability): ?>
            <div class="ability">
                <?php echo $ability->afficher(); ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="section">
        <h2>Agent</h2>
        <div class="info">
            <?php echo $jett->decrire(); ?><br>
            <strong>Ultimate prêt ?</strong> <?php echo $jett->ultimateDisponible() ? 'oui ✓' : 'non ✗'; ?>
        </div>
    </div>

    <div class="section">
        <h2>Équipe</h2>
        <div class="info">
            <?php echo nl2br($valorantTeam->decrire()); ?>
        </div>
    </div>
</body>
</html>
