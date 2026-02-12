# Activité PHP POO : Agents de Valorant

Objectif : guider des débutants vers les bases de la programmation orientée objet (POO) en PHP à l’aide d’un mini-scénario inspiré de Valorant.

## Prérequis
- PHP 8 installé (`php -v` pour vérifier)
- Un éditeur de texte simple
- Un terminal pour exécuter `php index.php`

## Structure du dossier
- `index.php` : point d’entrée, montre un exemple entièrement fonctionnel
- `src/Ability.php` : classe « Capacité » (mots-clés, attributs, méthodes)
- `src/Agent.php` : classe « Agent Valorant » avec gestion d’ultimate
- `src/Team.php` : classe « Équipe » pour assembler plusieurs agents

Chaque partie ci-dessous introduit un concept POO, une action concrète et une mini-vérification.

## Partie 1 — Première classe : `Ability`
1. Ouvrir `src/Ability.php` et repérer :
   - le mot-clé `class`
   - les propriétés privées (`private string $nom` …)
   - le constructeur `__construct`
   - la méthode `afficher()`
2. Créer votre propre capacité : copier les lignes 20‑25 de `index.php` et modifier le nom/description.
3. Lancer `php index.php` pour voir l’affichage de toutes les capacités.

## Partie 2 — Créer un Agent avec des propriétés
1. Dans `src/Agent.php`, identifier les propriétés `$nom`, `$role`, `$capacites`, `$ultimateCharge`.
2. Ajouter une nouvelle méthode simple juste après `ajouterCapacite()` :
   ```php
   public function getRole(): string
   {
       return $this->role;
   }
   ```
3. Dans `index.php`, après la création d’un agent, ajouter `echo $jett->getRole();` pour vérifier la valeur.

## Partie 3 — Méthodes et état (ultimate)
1. Toujours dans `src/Agent.php`, examiner `chargerUltimate()` et `ultimateDisponible()`.
2. Modifier `chargerUltimate()` pour limiter la charge à 7 :
   ```php
   $this->ultimateCharge = min(7, $this->ultimateCharge + $points);
   ```
3. Relancer `php index.php` : la ligne « Ultimate prêt ? » doit devenir `oui` une fois la charge pleine.

## Partie 4 — Collaboration d’objets avec `Team`
1. Ouvrir `src/Team.php` et lire le constructeur + `ajouterAgent()`.
2. Ajouter un second agent dans `index.php`, puis appelez `ajouterAgent()` pour l’intégrer à l’équipe.
3. Exécuter `php index.php` : vérifiez que la méthode `decrire()` affiche les deux agents.

## Partie 5 — Mini-défi Valorant
1. Créer un nouvel agent de votre choix (Phoenix, Sage, etc.).
2. Concevoir au moins deux capacités en utilisant la classe `Ability`.
3. Charger son ultimate jusqu’à ce qu’il soit prêt et afficher son état dans le terminal.

## Ressources rapides
- Doc PHP sur les classes : https://www.php.net/manual/fr/language.oop5.php
- Commande pour relancer le script : `php index.php`

Amusez-vous à créer votre propre stratégie Valorant tout en apprenant la POO !
