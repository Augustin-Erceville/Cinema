DROP DATABASE IF
CREATE DATABASE Cinema CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE Cinema;

CREATE TABLE Users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(5000) NOT NULL,
    role ENUM('Client', 'Admin') NOT NULL
) ENGINE=InnoDB;

CREATE TABLE Films (
    id_film INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description VARCHAR(2048),
    genre ENUM('Comédie', 'Drame', 'Thriller', 'Action', 'Horreur', 'Science-fiction', 'Fantastique') NOT NULL,
    duree TIME NOT NULL,
    affiche VARCHAR(2048)
) ENGINE=InnoDB;

CREATE TABLE Seances (
    id_seance INT AUTO_INCREMENT PRIMARY KEY,
    ref_film INT NOT NULL,
    date DATE NOT NULL,
    heure TIME NOT NULL,
    salle VARCHAR(2) NOT NULL,
    place_dispo INT NOT NULL,
    CONSTRAINT fk_seance_film FOREIGN KEY (ref_film) REFERENCES Films(id_film) ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE Reservations (
    id_reservation INT AUTO_INCREMENT PRIMARY KEY,
    ref_user INT NOT NULL,
    ref_seance INT NOT NULL,
    nbr_place INT NOT NULL,
    CONSTRAINT fk_reservation_user FOREIGN KEY (ref_user) REFERENCES Users(id_user) ON DELETE CASCADE,
    CONSTRAINT fk_reservation_seance FOREIGN KEY (ref_seance) REFERENCES Seances(id_seance) ON DELETE CASCADE
) ENGINE=InnoDB;

INSERT INTO `films` (`id_film`, `titre`, `description`, `genre`, `duree`, `affiche`) VALUES
(1, 'Avatar : La Voie de l\'eau', 'Jake Sully et Neytiri luttent pour protéger leur famille sur Pandora.', 'Science-fiction', '03:12:00', 'avatar_2.jpg'),
(2, 'Oppenheimer', 'Le récit du créateur de la bombe atomique, J. Robert Oppenheimer.', 'Drame', '03:00:00', 'oppenheimer.jpg'),
(3, 'Barbie', 'Une comédie unique explorant l\'univers coloré de Barbie.', 'Comédie', '01:54:00', 'barbie.jpg'),
(4, 'Mission : Impossible - Dead Reckoning Part One', 'Ethan Hunt poursuit une mission impossible face à une nouvelle menace.', 'Action', '02:43:00', 'mi_dead_reckoning.jpg'),
(5, 'John Wick : Chapitre 4', 'John Wick affronte de nouveaux ennemis dans sa quête de liberté.', 'Action', '02:49:00', 'john_wick_4.jpg'),
(6, 'Spider-Man : Across the Spider-Verse', 'Miles Morales revient pour explorer le multivers Spider-Man.', 'Fantastique', '02:20:00', 'spiderman_across.jpg'),
(7, 'The Batman', 'Une version sombre et intense de Batman avec Robert Pattinson.', 'Thriller', '02:56:00', 'the_batman.jpg'),
(8, 'Dune : Deuxième Partie', 'Paul Atreides continue sa lutte contre l\'Empire galactique.', 'Science-fiction', '02:45:00', 'dune_2.jpg'),
(9, 'Les Gardiens de la Galaxie Vol. 3', 'Les Gardiens partent pour une dernière aventure pleine d\'émotions.', 'Science-fiction', '02:30:00', 'gotg_3.jpg'),
(10, 'Thor : Love and Thunder', 'Thor tente de trouver un équilibre entre héroïsme et amour.', 'Action', '01:59:00', 'thor_love_and_thunder.jpg'),
(11, 'Indiana Jones et le Cadran de la Destinée', 'Indiana Jones embarque pour une dernière aventure.', 'Action', '02:34:00', 'indiana_jones_5.jpg'),
(12, 'The Flash', 'Barry Allen explore le multivers dans sa tentative de sauver sa famille.', 'Science-fiction', '02:24:00', 'the_flash.jpg'),
(13, 'Elementaire', 'Une histoire d\'amour entre des éléments opposés dans un monde fantastique.', 'Fantastique', '01:49:00', 'elementaire.jpg'),
(14, 'Super Mario Bros. : Le Film', 'Mario et Luigi plongent dans le Royaume Champignon.', 'Fantastique', '01:32:00', 'super_mario.jpg'),
(15, 'La Nonne 2', 'La suite du film d\'horreur culte centré sur la nonne démoniaque.', 'Horreur', '01:50:00', 'la_nonne_2.jpg'),
(16, 'Insidious : The Red Door', 'Un nouveau chapitre terrifiant de la saga Insidious.', 'Horreur', '01:47:00', 'insidious_red_door.jpg'),
(17, 'Asteroid City', 'Une comédie excentrique sur des événements mystérieux dans une ville isolée.', 'Comédie', '01:45:00', 'asteroid_city.jpg'),
(18, 'The Whale', 'Un professeur obèse tente de renouer avec sa fille.', 'Drame', '01:57:00', 'the_whale.jpg'),
(19, 'Nope', 'Une découverte terrifiante dans une ferme isolée.', 'Thriller', '02:10:00', 'nope.jpg'),
(20, 'Black Panther : Wakanda Forever', 'Le Wakanda lutte pour se reconstruire après la perte de son roi.', 'Action', '02:41:00', 'black_panther_2.jpg'),
(21, 'Scream VI', 'Ghostface revient pour semer la terreur à New York.', 'Horreur', '02:02:00', 'scream_6.jpg'),
(22, 'Everything Everywhere All At Once', 'Un multivers absurde et émouvant.', 'Fantastique', '02:19:00', 'everything_everywhere.jpg'),
(23, 'Creed III', 'Adonis Creed doit affronter un rival du passé.', 'Action', '01:56:00', 'creed_3.jpg'),
(24, 'Les Filles d\'Olfa', 'Un documentaire poignant sur les choix et les drames d\'une mère tunisienne.', 'Drame', '01:50:00', 'filles_olfa.jpg'),
(25, 'Fast & Furious X', 'La famille de Dom Toretto face à une nouvelle menace.', 'Action', '02:21:00', 'fast_x.jpg');