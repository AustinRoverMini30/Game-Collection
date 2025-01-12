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
    desc_jeu VARCHAR(500) NOT NULL,
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
(4, 'Syberia', 'Microids', '2002-01-09', 'Kate Walker, une jeune avocate new-yorkaise est dépêchée pour s’occuper de la vente d’une ancienne usine d’automates cachée dans les Alpes françaises. Elle était loin d’imaginer que cette tâche, pourtant simple d’apparence, changerait sa vie à jamais. Elle est très vite embarquée dans un voyage jusque dans les confins de l’Europe de l’est, avec pour compagnie un automate très particulier nommé Oscar. Ensemble, ils découvrent des lieux incroyables, peuplés de personnages hauts en couleur, avant d', 'https://m.media-amazon.com/images/M/MV5BZGNlOTAzNGQtYmVjZi00MDc5LThkZjItMDQyYzA4OThkZThmXkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia/'),
(5, 'Syberia 2', 'Microids', '2004-03-23', 'Après avoir atteint le but ultime de son voyage, obtenir la signature de Hans Voralberg, concluant ainsi la vente de l’usine, Kate décide d’abandonner sa vie parfaite à New-York pour aider le vieil homme à réaliser son rêve de toujours. Formant une équipe très particulière, Kate et l’excentrique Hans Voralberg, toujours escortés d’Oscar l’automate, partent pour un tout nouveau voyage. Leur but : retrouver les derniers mammouths légendaires de Syberia, au cœur d’un univers oublié.', 'https://m.media-amazon.com/images/M/MV5BZmI1YjczYmItMTQ3Ni00MWZkLWJjZjItMDYxMDQ0YmMyNzAxXkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia-2/'),
(6, 'Syberia 3', 'Microids', '2017-04-20', 'Syberia 3, toujours né de l’imagination de l’auteur Benoît Sokal, se concentre sur un voyage entièrement nouveau. Après avoir quitté l’île, Kate est retrouvée mourante sur un rivage par la tribu Youkole, un peuple nomade accompagnant leurs autruches des neiges en pleine migration. Coincés, prisonniers de la ville de Valsembor, ils devront ensemble trouver un moyen de poursuivre leur périple, dans une course-poursuite contre leur ennemis et des obstacles insoupçonnés. Sans compter l’ancienne vie ', 'https://m.media-amazon.com/images/M/MV5BZDI4ZTQyNTUtMWI4OS00MTFlLWI0YzAtZmQwMDE5ZWVlZjk2XkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia-3/'),
(7, 'Syberia The World Before', 'Microids', '2022-03-18', 'Vaghen, 1937 : Dana Roze est une jeune fille de 17 ans, qui démarre une brillante carrière de pianiste. Mais son avenir s’assombrit alors que la menace fasciste de l’Ombre Brune plane sur l’Europe, à l’aube de la Seconde Guerre Mondiale.\r\n\r\nTaïga, 2004 : Kate Walker survit comme elle peut dans la mine de sel où elle a été emprisonnée, lorsqu’un évènement tragique la pousse à repartir dans une nouvelle aventure en quête de son identité.', 'https://m.media-amazon.com/images/M/MV5BYTJhMDU4YzgtZjljNS00OWI2LWExOWEtOGQ2NTBmMGY2MDFiXkEyXkFqcGc@._V1_.jpg', 'https://www.microids.com/fr/jeu-syberia-the-world-before/'),
(8, 'L\'Amerzone - Le Testament de l\'Explorateur', 'Microids', '2025-04-01', 'Poussé par le récit rempli de remords d’un explorateur déchu, incarnez un journaliste en quête d’aventure et de vérité dans sa découverte d’un pays oublié, l’Amerzone !\r\n\r\nVous allez devoir plonger dans le passé et mener l’enquête dans les vestiges de cette terre aux nombreux secrets.\r\nTrouverez-vous la clé du mystère derrière les Grands Oiseaux Blancs, l’espèce endémique de l’Amerzone ?\r\n\r\nL’Amerzone – Le Testament de l’Explorateur est un véritable appel au voyage, une quête onirique qui transp', 'https://i0.wp.com/www.microids.com/wp-content/uploads/2024/03/Listing-produits-Microids-Wordpress.png?w=1060&ssl=1', 'https://www.microids.com/fr/lamerzone-le-testament-de-lexplorateur/'),
(9, 'Lost Ember', 'Mooneye', '2019-11-22', 'Un monde d\'une beauté à couper le souffle détient les secrets de son passé, et c\'est à vous et votre compagnon de les découvrir. Incarnez n\'importe quel animal que vous rencontrez pour découvrir le monde selon de nouvelles perspectives et poursuivez votre destin dans l\'aventure de Lost Ember.', 'https://assets.nintendo.com/image/upload/f_auto/q_auto/dpr_1.5/c_scale,w_400/ncom/en_US/games/switch/l/lost-ember-switch/description-image', 'https://lostember.com/'),
(10, 'Farewell North', 'Mooneye', '2024-08-16', 'Rendez leurs couleurs aux îles de Farewell North dans ce voyage riche en atmosphère où vous incarnez un border collie aux côtés de son humaine. Explorez terre et mer, trouvez les sentiers cachés et redonnez vie aux animaux tout en retraçant une histoire touchante sur le thème des adieux.', 'https://static.actugaming.net/media/2024/06/farewell-north-jaquette.jpg', 'https://farewell-north.com/'),
(11, 'Life is Strange', 'Square Enix', '2015-01-29', 'Life is Strange est un jeu d\'aventure récompensé et encensé par la critique permettant au joueur de remonter dans le temps et modifier le passé, le présent et l\'avenir.', 'https://fyre.cdn.sewest.net/life-is-strange-hub/6634aba837d4a15412aaed4b/life-is-strange-2024-2--nN3g9MGLt.jpg?quality=85&width=3840', 'https://www.square-enix-games.com/fr_FR/games/life-is-strange'),
(12, 'Alien Isolation', 'SEGA', '2016-10-06', 'Découvrez le vrai sens de la peur dans Alien: Isolation, un survival horror se déroulant dans une atmosphère d\'épouvante et de danger constants. Quinze ans ont passé depuis les événements d\'Alien™. La fille d\'Ellen Ripley, Amanda, en mission pour percer le mystère de la disparition de sa mère, s\'embarque dans une lutte désespérée pour survivre.\r\n\r\nDans la peau d\'Amanda, vous naviguerez dans un monde toujours plus angoissant tout en faisant face à une population paniquée et désœuvrée, ainsi qu\'à ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaawnY5umdN1XzcOpI_dPQ3a1rclE-wCkoAw&s', 'https://www.sega.com/alien-isolation/alien-isolation'),
(13, 'Stray', 'Annapurna Interactive', '2022-07-19', 'Perdu, seul et séparé de sa famille, un chat errant doit résoudre un ancien mystère pour fuir une ville tombée dans l’oubli.\r\n\r\nStray est un jeu d’aventure où l’on incarne un chat en vue à la troisième personne. L’action se déroule sous les néons des ruelles d’une cyber-cité en déclin et dans les décors glauques de ses recoins les plus miteux. Explorez les environs, défendez-vous contre des menaces inattendues et résolvez les énigmes de ce lieu inhospitalier qui n’héberge que de modestes droïdes', 'https://image.api.playstation.com/vulcan/ap/rnd/202206/0300/E2vZwVaDJbhLZpJo7Q10IyYo.png', 'https://annapurnainteractive.com/en/games/stray'),
(14, 'Genshin Impact', 'miHoYo', '2020-09-28', 'Dans un monde fantastique nommé Teyvat, une sœur et un frère se retrouvent séparés par une déesse inconnue. Le joueur commence son aventure en tant que Voyageur ou Voyageuse dont l\'origine est inconnue, à la recherche de l\'autre. Au cours de l\'aventure, le joueur a la possibilité de contrôler plusieurs personnages, chacun ayant une personnalité unique et des capacités élémentaires différentes selon le personnage. Pendant sa quête, le joueur découvre l\'histoire de ce nouveau monde à travers celle', 'https://cdn1.epicgames.com/offer/879b0d8776ab46a59a129983ba78f0ce/genshintall_1200x1600-4a5697be3925e8cb1f59725a9830cafc', 'https://genshin.hoyoverse.com/fr'),
(15, 'Retour vers le futur', 'Telltale Games', '2010-12-22', 'Marty McFly et Doc Brown sont de retour dans les nouvelles aventures de Retour vers le Futur! 6 mois après les évènements du troisième film, la DeLorean retourne mystérieusement à Hill Valley, sans conducteur. Marty doit aller chercher de l\'aide auprès d\'un Emmett Brown adolescent ou l\'espace temps risque d\'y passer.', 'https://image.jeuxvideo.com/images/jaquettes/00037275/jaquette-retour-vers-le-futur-le-jeu-pc-cover-avant-g-1336377257.jpg', 'https://store.steampowered.com/app/31290/Back_to_the_Future_The_Game/'),
(16, 'Life Is Strange: Before the Storm', 'Square Enix', '2017-08-31', 'Life is Strange: Before the Storm est une aventure complète en trois parties, se déroulant trois ans avant les évènements survenus dans le premier opus récompensé et encensé par la critique.\r\n\r\nVous incarnez Chloe Price, une adolescente de 16 ans qui noue une amitié inattendue avec Rachel Amber, une jeune fille belle, populaire et promise à un avenir radieux.\r\n\r\nAlors qu’un secret de famille menace de faire voler en éclats l’univers de Rachel, sa toute nouvelle amitié avec Chloe lui donnera la f', 'https://image.api.playstation.com/cdn/EP0082/CUSA08487_00/knwlXuK5HG51SLXXCBeVvyQJuoHHuJQY.png', 'https://www.square-enix-games.com/fr_FR/games/life-is-strange-before-the-storm'),
(17, 'Take On Mars', 'Bohemia Interactive', '2017-02-09', 'Explore the rocky terrain and sandy wastes of the Red Planet. Bohemia Interactive’s Take On Mars places you right in the middle of mankind’s most exciting undertaking. Start out in the seat of a rover operator, finish as the first human to have ever set foot on Mars. With a scientific arsenal at your disposal, you will pioneer the exploration, and colonization, of the Red Planet.', 'https://cdn.gamekult.com/images/photos/30/50/15/34/take-on-mars-jaquette-ME3050153403_2.jpg', 'https://mars.takeonthegame.com/'),
(18, 'Little Nightmares', 'BANDAI NAMCO Entertainment', '2017-04-28', 'Depuis 2017, la série des Little Nightmares captive des millions de joueurs et de joueuses. Aujourd\'hui, c\'est à votre tour d\'essayer de survivre à vos premiers pas dans la plus charmante des séries d\'horreur jamais créée.\r\n\r\nEndossez le rôle de Six, une enfant solitaire perdue dans le vaisseau de métal connu sous le nom de l\'Antre et entourée d\'adultes aussi déformés que dangereux. Vous devrez faire tout votre possible pour vous en échapper en un seul morceau, ou le sort que vous connaîtrez ser', 'https://image.api.playstation.com/gs2-sec/acpkgo/prod/CUSA05955_00/1/i_5d1dabe62154263422fbe31e6dbd1ea23887d571f018de165e4a99e0fb99d9d5/i/icon0.png', 'https://fr.bandainamcoent.eu/little-nightmares/little-nightmares'),
(19, 'Britannic: Patroness of the Mediterranean', 'Vintage Digital Revival, LLC', '2020-06-19', 'Step aboard the HMHS Britannic, the third ship in the Olympic Class trio, who, like her older sister the Titanic, was cheated of a promising career. This ship has never been properly recreated before, and no one has seen her in this state since she sailed the Mediterranean. Now, as the result of extensive research by our team and leading Britannic historians, you can explore her and learn about her like never before.\r\n\r\nBRITANNIC: PATRONESS OF THE MEDITERRANEAN is a virtual museum-like experienc', 'https://gamegator.net/_next/image?url=https%3A%2F%2Fimages.gamegator.net%2Fco2cex&w=640&q=75', 'https://store.steampowered.com/app/1259560/Britannic_Patroness_of_the_Mediterranean/');

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