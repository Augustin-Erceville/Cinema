<?php include('header.php');
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
$films = $filmRepository->getFilmById($_GET["id"]);
?>
    <div class="container py-5">
        <div class="row">
            <div class="col-3">
                <img class="rounded shadow" src="<?= htmlspecialchars($films->getAffiche()) ?>" alt="Affiche" style="max-width: 100%;">
            </div>
            <div class="col bg-info-subtle text-dark rounded shadow">
                <h1 class="text-center mt-5"><?= htmlspecialchars($films->getTitre()) ?></h1>
                <p class="fs-5" style="text-align: justify"><?= htmlspecialchars($films->getDescription()) ?></p>
                <h2>Caractéristiques</h2>
                <h4><span class="badge rounded-pill text-bg-primary">Genre : <?= htmlspecialchars($films->getGenre()) ?></span>
                    <span class="badge rounded-pill text-bg-danger">Date de sortie : <?= htmlspecialchars($films->getSortie()) ?></span>
                    <span class="badge rounded-pill text-bg-secondary">Durée : <?= htmlspecialchars($films->getDuree()) ?></span></h4>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>