<?php
include ('header.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO films (titre, description, genre, sortie, duree, affiche) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['titre'],
        $_POST['description'],
        $_POST['genre'],
        $_POST['sortie'],
        $_POST['duree'],
        $_POST['affiche']
    ]);
    header("Location: gestion_film.php");
    exit;
}
?>
<div class="container py-5">
    <h1>Ajouter un Film</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" id="genre" name="genre" required>
                <option value="Comédie">Comédie</option>
                <option value="Drame">Drame</option>
                <option value="Thriller">Thriller</option>
                <option value="Action">Action</option>
                <option value="Horreur">Horreur</option>
                <option value="Science-fiction">Science-fiction</option>
                <option value="Fantastique">Fantastique</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sortie" class="form-label">Date de sortie</label>
            <input type="date" class="form-control" id="sortie" name="sortie" required>
        </div>
        <div class="mb-3">
            <label for="duree" class="form-label">Durée</label>
            <input type="time" class="form-control" id="duree" name="duree" required>
        </div>
        <div class="mb-3">
            <label for="affiche" class="form-label">Affiche (URL)</label>
            <input type="url" class="form-control" id="affiche" name="affiche">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
<?php include('footer.php') ?>