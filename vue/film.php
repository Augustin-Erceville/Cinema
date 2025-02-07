<?php
include ('header.php');
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
$films = $filmRepository->getFilms();
$films = $filmRepository->getFilmsObj();
?>
<div class="container py-5">
    <h1>Gestion des Films</h1>
    <a href="film_create.php" class="btn btn-success mb-3">➕</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Genre</th>
            <th>Date de sortie</th>
            <th>Durée</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($films)){ ?>

            <?php
            /** @var Films $film */
            foreach ($films as $film){ ?>
                <tr>
                    <td><?= htmlspecialchars($film->getIdFilm()) ?></td>
                    <td><?= htmlspecialchars($film->getTitre()) ?></td>
                    <td><?= htmlspecialchars($film->getGenre()) ?></td>
                    <td><?= htmlspecialchars($film->getSortie()) ?></td>
                    <td><?= htmlspecialchars($film->getDuree()) ?></td>
                    <td>
                        <a href="film_read.php?id=<?= $film->getIdFilm() ?>" class="btn btn-info btn-sm">👁️</a>
                        <a href="film_update.php?id=<?= $film->getIdFilm() ?>" class="btn btn-warning btn-sm">✏️</a>
                        <a href="film_delete.php?id=<?= $film->getIdFilm() ?>" class="btn btn-danger btn-sm">🗑️</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }else{ ?>
            <tr>
                <td colspan="6" class="text-center">Aucun film trouvé.</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
