<?php
include('header.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("UPDATE films SET titre = ?, description = ?, genre = ?, sortie = ?, duree = ?, affiche = ? WHERE id_film = ?");
    $stmt->execute([
        $_POST['titre'],
        $_POST['description'],
        $_POST['genre'],
        $_POST['sortie'],
        $_POST['duree'],
        $_POST['affiche'],
        $_POST['id_film']
    ]);
    header("Location: gestion_film.php");
    exit;
}
$stmt = $bdd->prepare("SELECT * FROM films WHERE id_film = ?");
$stmt->execute([$_GET['id']]);
$film = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1>Modifier le Film</h1>
    <form method="POST">
        <input type="hidden" name="id_film" value="<?= htmlspecialchars($film['id_film']) ?>">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?= htmlspecialchars($film['titre']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"><?= htmlspecialchars($film['description']) ?></textarea>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" id="genre" name="genre" required>
                <option value="Comédie" <?= $film['genre'] == 'Comédie' ? 'selected' : '' ?>>Comédie</option>
                <option value="Drame" <?= $film['genre'] == 'Drame' ? 'selected' : '' ?>>Drame</option>
                <option value="Thriller" <?= $film['genre'] == 'Thriller' ? 'selected' : '' ?>>Thriller</option>
                <option value="Action" <?= $film['genre'] == 'Action' ? 'selected' : '' ?>>Action</option>
                <option value="Horreur" <?= $film['genre'] == 'Horreur' ? 'selected' : '' ?>>Horreur</option>
                <option value="Science-fiction" <?= $film['genre'] == 'Science-fiction' ? 'selected' : '' ?>>Science-fiction</option>
                <option value="Fantastique" <?= $film['genre'] == 'Fantastique' ? 'selected' : '' ?>>Fantastique</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="sortie" class="form-label">Date de sortie</label>
            <input type="date" class="form-control" id="sortie" name="sortie" value="<?= htmlspecialchars($film['sortie']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="duree" class="form-label">Durée</label>
            <input type="time" class="form-control" id="duree" name="duree" value="<?= htmlspecialchars($film['duree']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="affiche" class="form-label">Affiche (URL)</label>
            <input type="url" class="form-control" id="affiche" name="affiche" value="<?= htmlspecialchars($film['affiche']) ?>">
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
<?php include('footer.php') ?>