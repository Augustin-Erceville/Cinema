<?php
include('header.php');
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
$films = $filmRepository->getFilmById($_GET["id"]);
?>
<div class="container py-5">
    <h1>Modifier le Film</h1>
    <form method="POST">
        <input type="hidden" name="id_film" value="<?= htmlspecialchars($films->getIdFilm()) ?>">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?= htmlspecialchars($films->getTitre()) ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"><?= htmlspecialchars($films->getDescription()) ?></textarea>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" id="genre" name="genre" required>
                <option value="Comédie" <?= htmlspecialchars($films->getGenre()) ?>>Comédie</option>
                <option value="Drame" <?= htmlspecialchars($films->getGenre()) ?>>Drame</option>
                <option value="Thriller" <?= htmlspecialchars($films->getGenre()) ?>>Thriller</option>
                <option value="Action" <?= htmlspecialchars($films->getGenre()) ?>>Action</option>
                <option value="Horreur" <?= htmlspecialchars($films->getGenre()) ?>>Horreur</option>
                <option value="Science-fiction" <?= htmlspecialchars($films->getGenre()) ?>>Science-fiction</option>
                <option value="Fantastique" <?= htmlspecialchars($films->getGenre()) ?>>Fantastique</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sortie" class="form-label">Date de sortie</label>
            <input type="date" class="form-control" id="sortie" name="sortie" value="<?= htmlspecialchars($films->getSortie()) ?>" required>
        </div>
        <div class="mb-3">
            <label for="duree" class="form-label">Durée</label>
            <input type="time" class="form-control" id="duree" name="duree" value="<?= htmlspecialchars($films->getDuree()) ?>" required>
        </div>
        <div class="mb-3">
            <label for="affiche" class="form-label">Affiche (URL)</label>
            <input type="url" class="form-control" id="affiche" name="affiche" value="<?= htmlspecialchars($films->getAffiche()) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
<?php include('footer.php') ?>