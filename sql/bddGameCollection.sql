DROP IF EXISTS DATABASE game_collection;

CREATE DATABASE game_collection;

CREATE TABLE UTILISATEUR(
    id_util MEDIUMINT PRIMARY KEY AUTO_INCREMENT,
    nom_util VARCHAR(100) NOT NULL,
    prenom_util VARCHAR(100) NOT NULL,
    email_util VARCHAR(100) NOT NULL,
    password_util VARCHAR(100) NOT NULL
);

CREATE TABLE JEU(
    id_jeu MEDIUMINT PRIMARY KEY AUTO_INCREMENT,
    nom_jeu VARCHAR(100) NOT NULL,
    editeur_jeu VARCHAR(100) NOT NULL,
    date_sortie DATE NOT NULL,
    plateformes_jeu INT REFERENCES PLATEFORME(id_plateforme),
    desc_jeu VARCHAR(500) NOT NULL,
    URL_cover VARCHAR(500) NOT NULL,
    URL_site VARCHAR(500) NOT NULL
);

CREATE TABLE BIBLIOTHEQUE(
    id_util MEDIUMINT REFERENCES UTILISATEUR(id_util),
    id_jeu MEDIUMINT REFERENCES UTILISATEUR(id_jeu),
    nb_heures_jouees INT NOT NULL
);

CREATE TABLE PLATEFORME(
    id_plateforme MEDIUMINT PRIMARY KEY AUTO_INCREMENT,
    nom_plateforme VARCHAR(100) NOT NULL
);

CREATE TABLE SUPPORT(
    id_jeu MEDIUMINT REFERENCES JEU(id_jeu),
    id_plateforme MEDIUMINT REFERENCES PLATEFORME(id_plateforme)
);