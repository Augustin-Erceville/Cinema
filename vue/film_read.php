<?php include('header.php');
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
$films = $filmRepository->getFilms();
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

            <p><strong>Affiche : </strong> <img src="<?= htmlspecialchars($films[$_GET['id']]['affiche']) ?>" alt="Affiche" style="max-width: 200px;"></p>
            <p><strong>Titre : </strong> <?= htmlspecialchars($films[$_GET['id']]['titre']) ?></p>
            <p><strong>Description : </strong> <?= htmlspecialchars($films[$_GET['id']]['description']) ?></p>
            <p><strong>Genre : </strong> <?= htmlspecialchars($films[$_GET['id']]['genre']) ?></p>
            <p><strong>Date de sortie : </strong> <?= htmlspecialchars($films[$_GET['id']]['sortie']) ?></p>
            <p><strong>Durée : </strong> <?= htmlspecialchars($films[$_GET['id']]['duree']) ?></p>
            <a href="film.php" class="btn btn-secondary">Retour</a>


</div>
<?php include('footer.php') ?>