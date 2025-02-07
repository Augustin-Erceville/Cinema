<?php include('header.php');
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
/** @var Films $films */
$films = $filmRepository->getFilmById($_GET["id"]);
//var_dump($films);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Voir un Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1>Détails du Film

            <p><strong>Affiche : </strong> <img src="<?= htmlspecialchars($films->getAffiche()) ?>" alt="Affiche" style="max-width: 200px;"></p>
            <p><strong>Titre : </strong> <?= htmlspecialchars($films->getTitre()) ?></p>
            <p><strong>Description : </strong> <?= htmlspecialchars($films->getDescription()) ?></p>
            <p><strong>Genre : </strong> <?= htmlspecialchars($films->getGenre()) ?></p>
            <p><strong>Date de sortie : </strong> <?= htmlspecialchars($films->getSortie()) ?></p>
            <p><strong>Durée : </strong> <?= htmlspecialchars($films->getDuree()) ?></p>
            <a href="film.php" class="btn btn-secondary">Retour</a>


</div>
<?php include('footer.php') ?>