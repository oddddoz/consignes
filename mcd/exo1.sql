-- Table listant les rôles jouables dans Valorant
CREATE TABLE roles (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

-- Table décrivant les agents et le rôle auquel ils appartiennent
CREATE TABLE agents (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(60) NOT NULL,
    role_id INTEGER NOT NULL REFERENCES roles(id)
);

-- Table enregistrant des missions assignées à un agent précis
CREATE TABLE missions (
    id SERIAL PRIMARY KEY,
    titre VARCHAR(80) NOT NULL,
    agent_id INTEGER NOT NULL REFERENCES agents(id)
);
