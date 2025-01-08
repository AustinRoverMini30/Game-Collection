DROP TABLE IF EXISTS BIBLIOTHEQUE;
DROP TABLE IF EXISTS JEU;
DROP TABLE IF EXISTS PLATEFORME;
DROP TABLE IF EXISTS SUPPORT;
DROP TABLE IF EXISTS UTILISATEUR;

-- Crée la table UTILISATEUR
CREATE TABLE UTILISATEUR (
    id_util INT PRIMARY KEY AUTO_INCREMENT,
    nom_util VARCHAR(100) NOT NULL,
    prenom_util VARCHAR(100) NOT NULL,
    email_util VARCHAR(100) NOT NULL,
    password_util VARCHAR(100) NOT NULL
);

-- Crée la table PLATEFORME
CREATE TABLE PLATEFORME (
    id_plateforme INT PRIMARY KEY AUTO_INCREMENT,
    nom_plateforme VARCHAR(100) NOT NULL
);

-- Crée la table JEU
CREATE TABLE JEU (
    id_jeu INT PRIMARY KEY AUTO_INCREMENT,
    nom_jeu VARCHAR(100) NOT NULL,
    editeur_jeu VARCHAR(100) NOT NULL,
    date_sortie DATE NOT NULL,
    plateformes_jeu INT,
    desc_jeu VARCHAR(500) NOT NULL,
    URL_cover VARCHAR(500) NOT NULL,
    URL_site VARCHAR(500) NOT NULL,
    FOREIGN KEY (plateformes_jeu) REFERENCES PLATEFORME(id_plateforme)
);

-- Crée la table BIBLIOTHEQUE
CREATE TABLE BIBLIOTHEQUE (
    id_util INT,
    id_jeu INT,
    nb_heures_jouees INT NOT NULL,
    PRIMARY KEY (id_util, id_jeu),
    FOREIGN KEY (id_util) REFERENCES UTILISATEUR(id_util),
    FOREIGN KEY (id_jeu) REFERENCES JEU(id_jeu)
);

-- Crée la table SUPPORT
CREATE TABLE SUPPORT (
    id_jeu INT,
    id_plateforme INT,
    PRIMARY KEY (id_jeu, id_plateforme),
    FOREIGN KEY (id_jeu) REFERENCES JEU(id_jeu),
    FOREIGN KEY (id_plateforme) REFERENCES PLATEFORME(id_plateforme)
);