-- Table des genres cinématographiques disponibles
CREATE TABLE genres (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL UNIQUE
);

-- Table des réalisateurs avec leur pays d'origine
CREATE TABLE realisateurs (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(80) NOT NULL,
    pays VARCHAR(60)
);

-- Table des films, chaque film possède un genre et un réalisateur
CREATE TABLE films (
    id SERIAL PRIMARY KEY,
    titre VARCHAR(100) NOT NULL,
    annee_sortie INTEGER,
    genre_id INTEGER NOT NULL REFERENCES genres(id),
    realisateur_id INTEGER NOT NULL REFERENCES realisateurs(id)
);

-- Table recensant les séances programmées pour chaque film
CREATE TABLE seances (
    id SERIAL PRIMARY KEY,
    film_id INTEGER NOT NULL REFERENCES films(id),
    salle VARCHAR(30) NOT NULL,
    date_projection DATE NOT NULL
);
