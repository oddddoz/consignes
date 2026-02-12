-- Table listant les clubs engagés en Ligue des champions
CREATE TABLE clubs (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(80) NOT NULL,
    pays VARCHAR(50) NOT NULL
);

-- Table décrivant une saison précise de la compétition
CREATE TABLE saisons (
    id SERIAL PRIMARY KEY,
    annee VARCHAR(9) NOT NULL UNIQUE,
    sponsor_principal VARCHAR(80)
);

-- Table d'inscription reliant un club à une saison donnée (relation plusieurs-à-plusieurs)
CREATE TABLE participations (
    club_id INTEGER NOT NULL REFERENCES clubs(id),
    saison_id INTEGER NOT NULL REFERENCES saisons(id),
    groupe_lettre CHAR(1) NOT NULL,
    PRIMARY KEY (club_id, saison_id)
);
