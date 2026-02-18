# Consignes — Initiation à Git & GitHub

> L'objectif de cet exercice est de versionner un petit projet PHP en utilisant Git en ligne de commande et de le publier sur GitHub.

---

## Étape 1 — Préparer votre projet local

Créez un dossier sur votre machine et placez-y **au moins 3 fichiers PHP** de votre choix (par exemple une page d'accueil, un fichier de fonctions, et un fichier de configuration).

---

## Étape 2 — Transformer le dossier en dépôt Git

Ouvrez un terminal **dans votre dossier de projet**.

Cherchez comment **initialiser un nouveau dépôt Git** dans le répertoire courant.

> 💡 Mots-clés de recherche : *git initialiser dépôt local*, *git init*

---

## Étape 3 — Préparer les fichiers pour le premier enregistrement

Avant d'enregistrer quoi que ce soit, Git a besoin de savoir quels fichiers il doit suivre.

Cherchez comment **ajouter tous les fichiers du dossier à la zone de préparation** (aussi appelée *staging area* ou *index*).

> 💡 Mots-clés de recherche : *git ajouter fichiers suivi*, *git stage*, *git add*

---

## Étape 4 — Enregistrer une première version

Une fois les fichiers préparés, cherchez comment **créer un commit** avec un message descriptif, par exemple `"Premier commit : ajout des fichiers PHP de base"`.

> 💡 Mots-clés de recherche : *git enregistrer snapshot*, *git commit message*

---

## Étape 5 — Créer un dépôt sur GitHub

Connectez-vous à [github.com](https://github.com) et créez un **nouveau dépôt public** (repository) **vide** — ne cochez pas les options pour ajouter un README ou un .gitignore automatiquement, car vous avez déjà un projet local.

---

## Étape 6 — Relier votre dépôt local à GitHub

Votre projet local ne connaît pas encore l'adresse de votre dépôt GitHub. Cherchez comment **déclarer une adresse distante** (appelée *remote*) dans votre dépôt local, en utilisant l'URL HTTPS fournie par GitHub.

> 💡 Mots-clés de recherche : *git ajouter remote*, *git remote add origin*

---

## Étape 7 — Envoyer votre code sur GitHub

Il ne reste plus qu'à **envoyer (pousser) vos commits locaux** vers GitHub pour que votre code soit visible en ligne.

Cherchez comment **pousser une branche locale vers un dépôt distant** pour la première fois.

> 💡 Mots-clés de recherche : *git envoyer commits remote*, *git push origin main*

---

## Vérification finale

Rendez-vous sur la page de votre dépôt GitHub dans votre navigateur. Vos fichiers PHP doivent être visibles. Si c'est le cas, **bravo**, vous venez de publier votre premier projet sur GitHub ! 🎉

---

## Rappel du flux de travail Git

```
Modifier des fichiers  →  Préparer (stage)  →  Commiter  →  Pousser (push)
```

Ce cycle se répète à chaque fois que vous souhaitez sauvegarder et partager une nouvelle version de votre travail.
