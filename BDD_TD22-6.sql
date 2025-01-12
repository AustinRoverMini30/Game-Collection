DROP TABLE IF EXISTS BIBLIOTHEQUE;
DROP TABLE IF EXISTS UTILISATEUR;
DROP TABLE IF EXISTS SUPPORT;
DROP TABLE IF EXISTS JEU;
DROP TABLE IF EXISTS PLATEFORME;

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
    desc_jeu VARCHAR(2000) NOT NULL,
    URL_cover VARCHAR(500) NOT NULL,
    URL_site VARCHAR(500) NOT NULL
);

-- Crée la table BIBLIOTHEQUE
CREATE TABLE BIBLIOTHEQUE (
    id_util INT,
    id_jeu INT,
    nb_heures_jouees INT NOT NULL,
    PRIMARY KEY (id_util, id_jeu),
    FOREIGN KEY (id_util) REFERENCES UTILISATEUR(id_util) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_jeu) REFERENCES JEU(id_jeu) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crée la table SUPPORT
CREATE TABLE SUPPORT (
    id_jeu INT,
    id_plateforme INT,
    PRIMARY KEY (id_jeu, id_plateforme),
    FOREIGN KEY (id_jeu) REFERENCES JEU(id_jeu) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_plateforme) REFERENCES PLATEFORME(id_plateforme) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO PLATEFORME (id_plateforme, nom_plateforme) VALUES
(1, 'PC'),
(2, 'PlayStation'),
(3, 'Nintendo'),
(4, 'Xbox');

INSERT INTO JEU (id_jeu, nom_jeu, editeur_jeu, date_sortie, desc_jeu, URL_cover, URL_site) VALUES
(4, 'Syberia', 'Microids', '2002-01-09', 'Kate Walker, une jeune avocate new-yorkaise, est dépêchée pour s’occuper de la vente d’une ancienne usine d’automates cachée dans les Alpes françaises. Elle était loin d’imaginer que cette tâche, pourtant simple d’apparence, changerait sa vie à jamais. Elle est très vite embarquée dans un voyage jusque dans les confins de l’Europe de l’Est, avec pour compagnie un automate très particulier nommé Oscar. Ensemble, ils découvrent des lieux incroyables, peuplés de personnages hauts en couleur, avant d’atteindre leur destination finale.', 'https://m.media-amazon.com/images/M/MV5BZGNlOTAzNGQtYmVjZi00MDc5LThkZjItMDQyYzA4OThkZThmXkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia/'),
(5, 'Syberia 2', 'Microids', '2004-03-23', 'Après avoir atteint le but ultime de son voyage, obtenir la signature de Hans Voralberg, concluant ainsi la vente de l’usine, Kate décide d’abandonner sa vie parfaite à New-York pour aider le vieil homme à réaliser son rêve de toujours. Formant une équipe très particulière, Kate et l’excentrique Hans Voralberg, toujours escortés d’Oscar l’automate, partent pour un tout nouveau voyage. Leur but : retrouver les derniers mammouths légendaires de Syberia, au cœur d’un univers oublié.', 'https://m.media-amazon.com/images/M/MV5BZmI1YjczYmItMTQ3Ni00MWZkLWJjZjItMDYxMDQ0YmMyNzAxXkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia-2/'),
(6, 'Syberia 3', 'Microids', '2017-04-20', 'Syberia 3, toujours né de l’imagination de l’auteur Benoît Sokal, se concentre sur un voyage entièrement nouveau. Après avoir quitté l’île, Kate est retrouvée mourante sur un rivage par la tribu Youkole, un peuple nomade accompagnant leurs autruches des neiges en pleine migration. Coincés, prisonniers de la ville de Valsembor, ils devront ensemble trouver un moyen de poursuivre leur périple, dans une course-poursuite contre leurs ennemis et des obstacles insoupçonnés. Sans compter l’ancienne vie de Kate, qui refait surface.', 'https://m.media-amazon.com/images/M/MV5BZDI4ZTQyNTUtMWI4OS00MTFlLWI0YzAtZmQwMDE5ZWVlZjk2XkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia-3/'),
(7, 'Syberia The World Before', 'Microids', '2022-03-18', 'Vaghen, 1937 : Dana Roze est une jeune fille de 17 ans, qui démarre une brillante carrière de pianiste. Mais son avenir s’assombrit alors que la menace fasciste de l’Ombre Brune plane sur l’Europe, à l’aube de la Seconde Guerre Mondiale.\r\n\r\nTaïga, 2004 : Kate Walker survit comme elle peut dans la mine de sel où elle a été emprisonnée, lorsqu’un évènement tragique la pousse à repartir dans une nouvelle aventure en quête de son identité. Ce double récit captivant vous plongera dans une histoire riche en émotions.', 'https://m.media-amazon.com/images/M/MV5BYTJhMDU4YzgtZjljNS00OWI2LWExOWEtOGQ2NTBmMGY2MDFiXkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia-the-world-before/'),
(8, 'L\'Amerzone - Le Testament de l\'Explorateur', 'Microids', '1999-11-18', 'Poussé par le récit rempli de remords d’un explorateur déchu, incarnez un journaliste en quête d’aventure et de vérité dans sa découverte d’un pays oublié, l’Amerzone !\r\n\r\nVous allez devoir plonger dans le passé et mener l’enquête dans les vestiges de cette terre aux nombreux secrets.\r\nTrouverez-vous la clé du mystère derrière les Grands Oiseaux Blancs, l’espèce endémique de l’Amerzone ? L’Amerzone – Le Testament de l’Explorateur est un véritable appel au voyage, une quête onirique qui transporte le joueur dans des paysages inoubliables.', 'https://i0.wp.com/www.microids.com/wp-content/uploads/2024/03/Listing-produits-Microids-Wordpress.png?w=1060&ssl=1', 'https://www.microids.com/fr/lamerzone-le-testament-de-lexplorateur/'),
(9, 'Lost Ember', 'Mooneye', '2019-11-22', 'Un monde d\'une beauté à couper le souffle détient les secrets de son passé, et c\'est à vous et votre compagnon de les découvrir. Incarnez n\'importe quel animal que vous rencontrez pour découvrir le monde selon de nouvelles perspectives et poursuivez votre destin dans l\'aventure de Lost Ember.', 'https://assets.nintendo.com/image/upload/f_auto/q_auto/dpr_1.5/c_scale,w_400/ncom/en_US/games/switch/l/lost-ember-switch/description-image', 'https://lostember.com/'),
(10, 'Farewell North', 'Mooneye', '2024-08-16', 'Rendez leurs couleurs aux îles de Farewell North dans ce voyage riche en atmosphère où vous incarnez un border collie aux côtés de son humaine. Explorez terre et mer, trouvez les sentiers cachés et redonnez vie aux animaux tout en retraçant une histoire touchante sur le thème des adieux.', 'https://static.actugaming.net/media/2024/06/farewell-north-jaquette.jpg', 'https://farewell-north.com/'),
(11, 'Life is Strange', 'Square Enix', '2015-01-29', 'Life is Strange est un jeu d\'aventure récompensé et encensé par la critique permettant au joueur de remonter dans le temps et modifier le passé, le présent et l\'avenir. Avec des choix moraux et des conséquences tangibles, ce jeu émotionnellement chargé explore les thèmes de l\'amitié, du sacrifice et du passage à l\'âge adulte.', 'https://fyre.cdn.sewest.net/life-is-strange-hub/6634aba837d4a15412aaed4b/life-is-strange-2024-2--nN3g9MGLt.jpg?quality=85&width=3840', 'https://www.square-enix-games.com/fr_FR/games/life-is-strange'),
(12, 'Alien Isolation', 'SEGA', '2016-10-06', 'Découvrez le vrai sens de la peur dans Alien: Isolation, un survival horror se déroulant dans une atmosphère d\'épouvante et de danger constants. Quinze ans après les événements d\'Alien™, Amanda Ripley, en mission pour percer le mystère de la disparition de sa mère, s\'embarque dans une lutte désespérée pour survivre.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaawnY5umdN1XzcOpI_dPQ3a1rclE-wCkoAw&s', 'https://www.sega.com/alien-isolation/alien-isolation'),
(13, 'Stray', 'Annapurna Interactive', '2022-07-19', 'Perdu, seul et séparé de sa famille, un chat errant doit résoudre un ancien mystère pour fuir une ville tombée dans l’oubli. Explorez les ruelles cyberpunk de cette ville mystérieuse et découvrez ses secrets à travers les yeux d’un chat. Stray offre une expérience unique en combinant exploration, énigmes et narration.', 'https://image.api.playstation.com/vulcan/ap/rnd/202206/0300/E2vZwVaDJbhLZpJo7Q10IyYo.png', 'https://annapurnainteractive.com/en/games/stray'),
(14, 'Genshin Impact', 'miHoYo', '2020-09-28', 'Dans un monde fantastique nommé Teyvat, une sœur et un frère se retrouvent séparés par une déesse inconnue. Le joueur commence son aventure en tant que Voyageur ou Voyageuse à la recherche de l\'autre. Découvrez des histoires captivantes, des combats épiques et un monde ouvert visuellement époustouflant.', 'https://cdn1.epicgames.com/offer/879b0d8776ab46a59a129983ba78f0ce/genshintall_1200x1600-4a5697be3925e8cb1f59725a9830cafc', 'https://genshin.hoyoverse.com/fr'),
(15, 'Retour vers le futur', 'Telltale Games', '2010-12-22', 'Marty McFly et Doc Brown sont de retour dans une toute nouvelle aventure interactive, six mois après les événements du troisième film. Découvrez une intrigue originale où le passé et le futur s\'entrelacent de manière spectaculaire.', 'https://image.jeuxvideo.com/images/jaquettes/00037275/jaquette-retour-vers-le-futur-le-jeu-pc-cover-avant-g-1336377257.jpg', 'https://store.steampowered.com/app/31290/Back_to_the_Future_The_Game/'),
(16, 'Life Is Strange: Before the Storm', 'Square Enix', '2017-08-31', 'Life is Strange: Before the Storm est une aventure complète en trois parties, se déroulant trois ans avant les évènements survenus dans le premier opus. Incarnez Chloe Price, une adolescente de 16 ans, et vivez une histoire d\'amitié et de découvertes face à des secrets de famille bouleversants.', 'https://image.api.playstation.com/cdn/EP0082/CUSA08487_00/knwlXuK5HG51SLXXCBeVvyQJuoHHuJQY.png', 'https://www.square-enix-games.com/fr_FR/games/life-is-strange-before-the-storm'),
(17, 'Take On Mars', 'Bohemia Interactive', '2017-02-09', 'Explorez les terrains rocheux et les sables arides de Mars. Prenez les commandes d\'un rover et devenez le premier humain à poser le pied sur la planète rouge. Avec un arsenal scientifique, partez à la conquête de cette terre inhospitalière.', 'https://cdn.gamekult.com/images/photos/30/50/15/34/take-on-mars-jaquette-ME3050153403_2.jpg', 'https://mars.takeonthegame.com/'),
(18, 'Little Nightmares', 'BANDAI NAMCO Entertainment', '2017-04-28', 'Incarnez Six, une petite fille prisonnière dans un monde cauchemardesque peuplé de créatures grotesques. Dans ce jeu de plateforme et d\'aventure, résolvez des énigmes pour échapper à l\'Antre et survivre aux dangers qui vous guettent.', 'https://image.api.playstation.com/gs2-sec/acpkgo/prod/CUSA05955_00/1/i_5d1dabe62154263422fbe31e6dbd1ea23887d571f018de165e4a99e0fb99d9d5/i/icon0.png', 'https://fr.bandainamcoent.eu/little-nightmares/little-nightmares'),
(19, 'Britannic: Patroness of the Mediterranean', 'Vintage Digital Revival, LLC', '2020-06-19', 'Explorez le Britannic, le troisième navire de la classe Olympic, et découvrez son histoire fascinante à travers une expérience immersive et éducative. Plongez dans un musée virtuel dédié à ce navire emblématique.', 'https://gamegator.net/_next/image?url=https%3A%2F%2Fimages.gamegator.net%2Fco2cex&w=640&q=75', 'https://store.steampowered.com/app/1259560/Britannic_Patroness_of_the_Mediterranean/');

INSERT INTO SUPPORT (id_jeu, id_plateforme) VALUES
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(8, 1),
(8, 2),
(8, 4),
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(10, 1),
(10, 2),
(10, 3),
(10, 4),
(11, 1),
(11, 2),
(11, 3),
(11, 4),
(12, 1),
(12, 2),
(12, 3),
(12, 4),
(13, 1),
(13, 2),
(13, 3),
(13, 4),
(14, 1),
(14, 2),
(14, 4),
(15, 1),
(15, 2),
(15, 4),
(16, 1),
(16, 2),
(16, 3),
(16, 4),
(17, 1),
(18, 1),
(18, 2),
(18, 3),
(18, 4),
(19, 1);