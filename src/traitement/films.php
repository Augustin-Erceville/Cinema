<?php
require_once "../bdd/Config.php";
require_once "../modele/Films.php";
require_once "../repository/FilmsRepository.php";

$config = new Config();
$bdd = $config->connexion();

$films = $bdd->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);
if (isset($_POST['envoyer'])) {
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $duree = $_POST['duree'];
    $genre = $_POST['genre'];
    $sortie = $_POST['sortie'];
    $affiche = $_POST['affiche'];

    if (!empty($titre) && !empty($description) && !empty($duree) && !empty($genre) &&
        !empty($sortie) && !empty($affiche)) {

        if (filter_var($titre, FILTER_VALIDATE_TITLE)) {
            $filmRepository = new FilmsRepository();
            $film = new Films();[
                'titre' => $titre,
                'description' => $description,
                'duree' => $duree,
                'genre' => $genre,
                'sortie' => $sortie,
                'affiche' => $affiche,
            ];

              $resultat = $filmRepository->film($film);
            }

        }
    }
?>