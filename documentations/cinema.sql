-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 07 fév. 2025 à 09:32
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projets_cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
                                       `id_film` int NOT NULL AUTO_INCREMENT,
                                       `titre` varchar(255) NOT NULL,
    `description` varchar(2048) DEFAULT NULL,
    `genre` enum('Comédie','Drame','Thriller','Action','Horreur','Science-fiction','Fantastique') NOT NULL,
    `sortie` date NOT NULL,
    `duree` time NOT NULL,
    `affiche` varchar(2048) DEFAULT NULL,
    PRIMARY KEY (`id_film`)
    ) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_film`, `titre`, `description`, `genre`, `sortie`, `duree`, `affiche`) VALUES
    (1, 'Avatar : La Voie de l\'eau', 'Se déroulant plus d’une décennie après les événements relatés dans le premier film, AVATAR : LA VOIE DE L’EAU raconte l\'histoire des membres de la famille Sully (Jake, Neytiri et leurs enfants), les épreuves auxquelles ils sont confrontés, les chemins qu’ils doivent emprunter pour se protéger les uns les autres, les batailles qu’ils doivent mener pour rester en vie et les tragédies qu\'ils endurent.', 'Science-fiction', '2022-12-16', '03:12:00', 'https://fr.web.img4.acsta.net/pictures/22/11/02/14/49/4565071.jpg'),
(2, 'Oppenheimer', 'En 1942, convaincus que l’Allemagne nazie est en train de développer une arme nucléaire, les États-Unis initient, dans le plus grand secret, le \"Projet Manhattan\" destiné à mettre au point la première bombe atomique de l’histoire. Pour piloter ce dispositif, le gouvernement engage J. Robert Oppenheimer, brillant physicien, qui sera bientôt surnommé \"le père de la bombe atomique\". C’est dans le laboratoire ultra-secret de Los Alamos, au cœur du désert du Nouveau-Mexique, que le scientifique et son équipe mettent au point une arme révolutionnaire dont les conséquences, vertigineuses, continuent de peser sur le monde actuel…', 'Drame', '2023-07-19', '03:01:00', 'https://fr.web.img3.acsta.net/c_310_420/pictures/23/05/26/16/52/2793170.jpg'),
    (3, 'Barbie', 'A Barbie Land, vous êtes un être parfait dans un monde parfait. Sauf si vous êtes en crise existentielle, ou si vous êtes Ken.', 'Comédie', '2023-07-19', '01:55:00', 'https://fr.web.img2.acsta.net/c_310_420/pictures/23/06/16/12/04/4590179.jpg'),
     (4, 'Mission : Impossible - Dead Reckoning Part One', 'Dans Mission: Impossible - Dead Reckoning Partie 1, Ethan Hunt et son équipe de l’IMF se lancent dans leur mission la plus périlleuse à ce jour : traquer une effroyable nouvelle arme avant que celle-ci ne tombe entre de mauvaises mains et menace l’humanité entière.\r\n\r\nLe contrôle du futur et le destin du monde sont en jeu. Alors que les forces obscures de son passé ressurgissent, Ethan s’engage dans une course mortelle autour du globe. Confronté à un puissant et énigmatique ennemi, Ethan réalise que rien ne peut se placer au-dessus de sa mission - pas même la vie de ceux qu’il aime.', 'Action', '2023-07-12', '02:43:00', 'https://fr.web.img4.acsta.net/c_310_420/pictures/23/06/16/09/11/1574235.jpg'),
     (5, 'John Wick : Chapitre 4', 'John Wick découvre un moyen de vaincre l’organisation criminelle connue sous le nom de la Grande Table. Mais avant de gagner sa liberté, Il doit affronter un nouvel ennemi qui a tissé de puissantes alliances à travers le monde et qui transforme les vieux amis de John en ennemis.', 'Action', '2023-03-22', '02:50:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/23/02/13/18/18/3312661.jpg'),
     (6, 'Spider-Man : Across the Spider-Verse', 'Après avoir retrouvé Gwen Stacy, Spider-Man, le sympathique héros originaire de Brooklyn, est catapulté à travers le Multivers, où il rencontre une équipe de Spider-Héros chargée d\'en protéger l\'existence. Mais lorsque les héros s\'opposent sur la façon de gérer une nouvelle menace, Miles se retrouve confronté à eux et doit redéfinir ce que signifie être un héros afin de sauver les personnes qu\'il aime le plus.', 'Fantastique', '2023-05-31', '02:21:00', 'https://fr.web.img6.acsta.net/c_310_420/pictures/23/05/11/10/00/1986933.jpg'),
     (7, 'The Batman', 'Deux années à arpenter les rues en tant que Batman et à insuffler la peur chez les criminels ont mené Bruce Wayne au coeur des ténèbres de Gotham City. Avec seulement quelques alliés de confiance - Alfred Pennyworth, le lieutenant James Gordon - parmi le réseau corrompu de fonctionnaires et de personnalités de la ville, le justicier solitaire s\'est imposé comme la seule incarnation de la vengeance parmi ses concitoyens. Lorsqu\'un tueur s\'en prend à l\'élite de Gotham par une série de machinations sadiques, une piste d\'indices cryptiques envoie le plus grand détective du monde sur une enquête dans la pègre, où il rencontre des personnages tels que Selina Kyle, alias Catwoman, Oswald Cobblepot, alias le Pingouin, Carmine Falcone et Edward Nashton, alias l’Homme-Mystère. Alors que les preuves s’accumulent et que l\'ampleur des plans du coupable devient clair, Batman doit forger de nouvelles relations, démasquer le coupable et rétablir un semblant de justice au milieu de l’abus de pouvoir et de corruption sévissant à Gotham City depuis longtemps.', 'Thriller', '2022-03-02', '02:57:00', 'https://fr.web.img3.acsta.net/c_310_420/pictures/22/02/16/17/42/3125788.jpg'),
     (8, 'Dune : Deuxième Partie', 'Dans DUNE : DEUXIÈME PARTIE, Paul Atreides s’unit à Chani et aux Fremen pour mener la révolte contre ceux qui ont anéanti sa famille. Hanté par de sombres prémonitions, il se trouve confronté au plus grand des dilemmes : choisir entre l’amour de sa vie et le destin de l’univers.', 'Science-fiction', '2024-02-28', '02:46:00', 'https://fr.web.img2.acsta.net/c_310_420/pictures/24/01/26/10/18/5392835.jpg'),
     (9, 'Les Gardiens de la Galaxie Vol. 3', 'Notre bande de marginaux favorite a quelque peu changé. Peter Quill, qui pleure toujours la perte de Gamora, doit rassembler son équipe pour défendre l’univers et protéger l’un des siens. En cas d’échec, cette mission pourrait bien marquer la fin des Gardiens tels que nous les connaissons.', 'Science-fiction', '2023-05-03', '02:30:00', 'https://fr.web.img3.acsta.net/c_310_420/pictures/23/02/13/11/43/2783447.jpg'),
     (10, 'Thor : Love and Thunder', 'Alors que Thor est en pleine introspection et en quête de sérénité, sa retraite est interrompue par un tueur galactique connu sous le nom de Gorr, qui s’est donné pour mission d’exterminer tous les dieux. Pour affronter cette menace, Thor demande l’aide de Valkyrie, de Korg et de son ex-petite amie Jane Foster, qui, à sa grande surprise, manie inexplicablement son puissant marteau, le Mjolnir. Ensemble, ils se lancent dans une dangereuse aventure cosmique pour comprendre les motivations qui poussent Gorr à la vengeance et l’arrêter avant qu’il ne soit trop tard.', 'Action', '2022-07-13', '01:59:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/22/05/24/11/16/2411535.jpg'),
     (11, 'Indiana Jones et le Cadran de la Destinée', '1969. Après avoir passé plus de dix ans à enseigner au Hunter College de New York, l\'estimé docteur Jones, professeur d\'archéologie, est sur le point de prendre sa retraite et de couler des jours paisibles.\r\n\r\nTout bascule après la visite surprise de sa filleule Helena Shaw, qui est à la recherche d\'un artefact rare que son père a confié à Indy des années auparavant : le fameux cadran d\'Archimède, une relique qui aurait le pouvoir de localiser les fissures temporelles. En arnaqueuse accomplie, Helena vole l’objet et quitte précipitamment le pays afin de le vendre au plus offrant. Indy n\'a d\'autre choix que de se lancer à sa poursuite. Il ressort son fedora et son blouson de cuir pour une dernière virée...', 'Action', '2023-06-28', '02:34:00', 'https://fr.web.img6.acsta.net/c_310_420/pictures/23/06/07/14/33/5787419.jpg'),
     (12, 'The Flash', 'Les réalités s’affrontent dans THE FLASH lorsque Barry se sert de ses super-pouvoirs pour remonter le temps et modifier son passé. Mais ses efforts pour sauver sa famille ne sont pas sans conséquences sur l’avenir, et Barry se retrouve pris au piège d’une réalité où le général Zod est de retour, menaçant d’anéantir la planète, et où les super-héros ont disparu. À moins que Barry ne réussisse à tirer de sa retraite un Batman bien changé et à venir en aide à un Kryptonien incarcéré, qui n’est pas forcément celui qu’il recherche. Barry s’engage alors dans une terrible course contre la montre pour protéger le monde dans lequel il est et retrouver le futur qu’il connaît. Mais son sacrifice ultime suffira-t-il à sauver l’univers ?', 'Science-fiction', '2023-06-14', '02:24:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/23/04/26/10/33/4339332.jpg'),
     (13, 'Elementaire', 'Dans la ville d’Element City, le feu, l’eau, la terre et l’air vivent dans la plus parfaite harmonie. C’est ici que résident Flam, une jeune femme intrépide et vive d’esprit, au caractère bien trempé, et Flack, un garçon sentimental et amusant, plutôt suiveur dans l’âme. L’amitié qu’ils se portent remet en question les croyances de Flam sur le monde dans lequel ils vivent...', 'Comédie', '2023-06-21', '01:42:00', 'https://fr.web.img2.acsta.net/c_310_420/o_club-allocine-2024-310x420.png_0_se/pictures/23/06/07/14/09/5709179.jpg'),
     (14, 'Super Mario Bros. : Le Film', 'Alors qu’ils tentent de réparer une canalisation souterraine, Mario et son frère Luigi, tous deux plombiers, se retrouvent plongés dans un nouvel univers féerique à travers un mystérieux conduit. Mais lorsque les deux frères sont séparés, Mario s’engage dans une aventure trépidante pour retrouver Luigi.\r\n\r\nDans sa quête, il peut compter sur l’aide du champignon Toad, habitant du Royaume Champignon, et les conseils avisés, en matière de techniques de combat, de la Princesse Peach, guerrière déterminée à la tête du Royaume. C’est ainsi que Mario réussit à mobiliser ses propres forces pour aller au bout de sa mission.', 'Comédie', '2023-04-05', '01:32:00', 'https://fr.web.img3.acsta.net/c_310_420/pictures/23/03/20/14/57/4979368.jpg'),
     (15, 'La Nonne 2 : La Malédiction de Sainte Lucie', 'Le mal n’a jamais été aussi proche : Valak, la nonne démoniaque de Conjuring revient… Dans le sud de la France.', 'Horreur', '2023-09-13', '01:49:00', 'https://fr.web.img6.acsta.net/c_310_420/pictures/23/07/12/15/32/1131759.jpg'),
     (16, 'Insidious : The Red Door', 'Afin de se débarrasser définitivement de leurs démons, Josh et son fils Dalton, à présent étudiant, doivent plonger encore plus profondément dans le Lointain pour affronter le sombre passé de leur famille et une multitude d\'esprits toujours plus inquiétants qui se cache derrière la Porte Rouge.', 'Horreur', '2023-07-05', '01:48:00', 'https://fr.web.img6.acsta.net/c_310_420/pictures/23/06/29/19/16/4707167.jpg'),
(17, 'Asteroid City', 'Asteroid City est une ville minuscule, en plein désert, dans le sud-ouest des États-Unis. Nous sommes en 1955. Le site est surtout célèbre pour son gigantesque cratère de météorite et son observatoire astronomique à proximité. Ce week-end, les militaires et les astronomes accueillent cinq enfants surdoués, distingués pour leurs créations scientifiques, afin qu’ils présentent leurs inventions. À quelques kilomètres de là, par-delà les collines, on aperçoit des champignons atomiques provoqués par des essais nucléaires.', 'Comédie', '2023-06-21', '01:46:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/23/05/12/12/18/5000360.jpg'),
(20, 'Black Panther : Wakanda Forever', 'La Reine Ramonda, Shuri, M’Baku, Okoye et les Dora Milaje luttent pour protéger leur nation des ingérences d’autres puissances mondiales après la mort du roi T’Challa. Alors que le peuple s’efforce d’aller de l’avant, nos héros vont devoir s’unir et compter sur l’aide de la mercenaire Nakia et d’Everett Ross pour faire entrer le royaume du Wakanda dans une nouvelle ère. Mais une terrible menace surgit d’un royaume caché au plus profond des océans : Talokan.', 'Action', '2022-11-09', '02:42:00', 'https://fr.web.img6.acsta.net/c_310_420/pictures/22/10/17/10/28/5232325.jpg'),
(21, 'Scream VI', 'Après avoir frappé à trois reprises à Woodsboro, après avoir terrorisé le campus de Windsor et les studios d’Hollywood, Ghostface a décidé de sévir dans Big Apple, mais dans une ville aussi grande que New-York personne ne vous entendra crier…', 'Horreur', '2023-03-08', '02:02:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/23/01/20/12/15/5780701.jpg'),
(22, 'Everything Everywhere All At Once', 'Evelyn Wang est à bout : elle ne comprend plus sa famille, son travail et croule sous les impôts… Soudain, elle se retrouve plongée dans le multivers, des mondes parallèles où elle explore toutes les vies qu’elle aurait pu mener. Face à des forces obscures, elle seule peut sauver le monde mais aussi préserver la chose la plus précieuse : sa famille.', 'Fantastique', '2022-08-31', '02:19:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/22/06/14/16/36/2606624.jpg'),
(23, 'Creed III', 'Idole de la boxe et entouré de sa famille, Adonis Creed n’a plus rien à prouver. Jusqu’au jour où son ami d’enfance, Damian, prodige de la boxe lui aussi, refait surface. A peine sorti de prison, Damian est prêt à tout pour monter sur le ring et reprendre ses droits. Adonis joue alors sa survie, face à un adversaire déterminé à l’anéantir.', 'Action', '2023-03-01', '01:57:00', 'https://fr.web.img5.acsta.net/c_310_420/pictures/23/02/10/10/56/3228985.jpg'),
(24, 'Les Filles d\'Olfa', 'La vie d\'Olfa, Tunisienne et mère de 4 filles, oscille entre ombre et lumière. Un jour, ses deux filles aînées disparaissent. Pour combler leur absence, la réalisatrice Kaouther Ben Hania convoque des actrices professionnelles et met en place un dispositif de cinéma hors du commun afin de lever le voile sur l’histoire d’Olfa et ses filles. Un voyage intime fait d’espoir, de rébellion, de violence, de transmission et de sororité qui va questionner le fondement même de nos sociétés.', 'Drame', '2023-07-05', '01:47:00', 'https://fr.web.img2.acsta.net/c_310_420/pictures/23/05/12/15/32/5611737.jpg'),
(25, 'Fast & Furious X', 'Après bien des missions et contre toute attente, Dom Toretto et sa famille ont su déjouer, devancer, surpasser et distancer tous les adversaires qui ont croisé leur route. Ils sont aujourd’hui face à leur ennemi le plus terrifiant et le plus intime : émergeant des brumes du passé, ce revenant assoiffé de vengeance est bien déterminé à décimer la famille en réduisant à néant tout ce à quoi, et surtout à qui Dom ait jamais tenu.\r\n\r\nDans FAST & FURIOUS 5 en 2011, Dom et son équipe avaient fait tomber l’infâme ponte de la drogue brésilienne, Hernan Reyes, en précipitant son empire du haut d’un pont de Rio De Janeiro. Ils étaient loin de se douter que son fils Dante, avait assisté impuissant à la scène et qu’il avait passé ces douze dernières années à échafauder le plan infernal qui exigerait de Dom un prix ultime.\r\n\r\nDante va débusquer et traquer Dom et sa famille aux quatre coins du monde, de Los Angeles aux catacombes de Rome, du Brésil à Londres et de l’Antarctique au Portugal. De nouvelles alliances vont se forger et de vieux ennemis réapparaitre. Mais tout va basculer quand Dom va comprendre que la cible principale de Dante n’est autre que son fils à peine âgé de 8 ans.', 'Action', '2023-05-17', '02:21:00', 'https://fr.web.img3.acsta.net/c_310_420/pictures/23/05/10/10/55/5129031.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id_reservation` int NOT NULL AUTO_INCREMENT,
  `ref_user` int NOT NULL,
  `ref_seance` int NOT NULL,
  `nbr_place` int NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `fk_reservation_user` (`ref_user`),
  KEY `fk_reservation_seance` (`ref_seance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `seances`
--

DROP TABLE IF EXISTS `seances`;
CREATE TABLE IF NOT EXISTS `seances` (
  `id_seance` int NOT NULL AUTO_INCREMENT,
  `ref_film` int NOT NULL,
  `salle` varchar(2) NOT NULL,
  `place_dispo` int NOT NULL,
  `date` date DEFAULT NULL,
  `heure` time DEFAULT NULL,
  PRIMARY KEY (`id_seance`),
  KEY `fk_seance_film` (`ref_film`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `seances`
--

INSERT INTO `seances` (`id_seance`, `ref_film`, `salle`, `place_dispo`, `date`, `heure`) VALUES
(1, 24, '12', 100, '2025-04-18', '16:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `role` enum('Client','Admin') NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `naissance` date NOT NULL,
  `password` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `fk_reservation_seance` FOREIGN KEY (`ref_seance`) REFERENCES `seances` (`id_seance`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_reservation_user` FOREIGN KEY (`ref_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Contraintes pour la table `seances`
--
ALTER TABLE `seances`
  ADD CONSTRAINT `fk_seance_film` FOREIGN KEY (`ref_film`) REFERENCES `films` (`id_film`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
