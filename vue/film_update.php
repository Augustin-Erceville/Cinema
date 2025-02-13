<?php
include('header.php');
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
$films = $filmRepository->getFilmById($_GET["id"]);
?>
    <div class="container py-5">
        <h1 class="text-center">Modifier le Film</h1>
        <form method="POST" action="film.php">
            <div class="row bg-warning-subtle text-dark rounded shadow">
                <div class="col py-3">
                    <input type="hidden" name="id_film" value="<?= htmlspecialchars($films->getIdFilm()) ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="titre" value="<?= htmlspecialchars($films->getTitre()) ?>" required>
                        <label for="floatingInput">Titre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" name="sortie" value="<?= htmlspecialchars($films->getSortie()) ?>" required>
                        <label for="floatingInput">Date de sortie</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control" id="floatingInput" name="duree" value="<?= htmlspecialchars($films->getDuree()) ?>" required>
                        <label for="floatingInput">Durée du film</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="genre" required>
                            <option value="Comédie" <?= htmlspecialchars($films->getGenre()) ?>>Comédie</option>
                            <option value="Drame" <?= htmlspecialchars($films->getGenre()) ?>>Drame</option>
                            <option value="Thriller" <?= htmlspecialchars($films->getGenre()) ?>>Thriller</option>
                            <option value="Action" <?= htmlspecialchars($films->getGenre()) ?>>Action</option>
                            <option value="Horreur" <?= htmlspecialchars($films->getGenre()) ?>>Horreur</option>
                            <option value="Science-fiction" <?= htmlspecialchars($films->getGenre()) ?>>Science-fiction</option>
                            <option value="Fantastique" <?= htmlspecialchars($films->getGenre()) ?>>Fantastique</option>
                        </select>
                        <label for="floatingSelect">Genre</label>
                    </div>
                    <div class="form-floating">
                        <input type="url" class="form-control" id="floatingInput" name="duree" value="<?= htmlspecialchars($films->getAffiche()) ?>" onchange="document.getElementById('a' +
                         'ffImage').src = this.value;" required>
                        <label for="floatingInput">Lien de l'affiche</label>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="form-floating">
                        <textarea class="form-control" rows="10" id="floatingTextarea2" style="height: 100%"> <?= htmlspecialchars($films->getDescription()) ?></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                </div>
                <div class="col-3 py-3">
                    <img id="affImage" class="rounded shadow" src="<?= htmlspecialchars($films->getAffiche()) ?>" alt="Affiche" style="max-width: 100%;">
                </div>
            </div>
            <div class="d-grid gap-2 my-3">
            <button type="submit" class="btn btn-outline-success">Mettre à jour les données</button>
            </div>
        </form>
    </div>
<?php include('footer.php') ?>