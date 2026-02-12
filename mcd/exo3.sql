-- Table des utilisateurs du réseau social
CREATE TABLE utilisateurs (
    id SERIAL PRIMARY KEY,
    pseudo VARCHAR(50) NOT NULL UNIQUE,
    date_inscription DATE NOT NULL
);

-- Table des publications créées par les utilisateurs
CREATE TABLE publications (
    id SERIAL PRIMARY KEY,
    auteur_id INTEGER NOT NULL REFERENCES utilisateurs(id),
    contenu TEXT NOT NULL,
    date_publication TIMESTAMP NOT NULL DEFAULT NOW()
);

-- Table des commentaires ajoutés aux publications
CREATE TABLE commentaires (
    id SERIAL PRIMARY KEY,
    publication_id INTEGER NOT NULL REFERENCES publications(id),
    auteur_id INTEGER NOT NULL REFERENCES utilisateurs(id),
    texte TEXT NOT NULL,
    date_commentaire TIMESTAMP NOT NULL DEFAULT NOW()
);

-- Table des relations d'abonnement entre utilisateurs (followers)
CREATE TABLE abonnements (
    abonne_id INTEGER NOT NULL REFERENCES utilisateurs(id),
    suivi_id INTEGER NOT NULL REFERENCES utilisateurs(id),
    date_suivi DATE NOT NULL,
    PRIMARY KEY (abonne_id, suivi_id)
);
