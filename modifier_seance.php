<?php
include('header.php');
include('config.php');

$id_seance = $_GET['id'] ?? null;

$stmt = $bdd->prepare("SELECT id_film, titre FROM films");
$stmt->execute();
$films = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $bdd->prepare("UPDATE seances SET id_film = ?, date_heure = ?, salle = ? WHERE id_seance = ?");
    $stmt->execute([
        $_POST['id_film'],
        $_POST['date_heure'],
        $_POST['salle'],
        $_POST['id_seance']
    ]);
    header("Location: gestion_seances.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM seances WHERE id_seance = ?");
$stmt->execute([$id_seance]);
$seance = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="container py-5">
    <h1>Modifier la Séance</h1>
    <form method="POST">
        <input type="hidden" name="id_seance" value="<?= htmlspecialchars($seance['id_seance']) ?>">
        <div class="mb-3">
            <label for="id_film" class="form-label">Film</label>
            <select class="form-select" id="id_film" name="id_film" required>
                <?php foreach ($films as $film): ?>
                    <option value="<?= $film['id_film'] ?>" <?= $film['id_film'] == $seance['id_film'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($film['titre']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="date_heure" class="form-label">Date et Heure</label>
            <input type="datetime-local" class="form-control" id="date_heure" name="date_heure" value="<?= htmlspecialchars($seance['date_heure']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="salle" class="form-label">Salle</label>
            <input type="text" class="form-control" id="salle" name="salle" value="<?= htmlspecialchars($seance['salle']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>

<?php include('footer.php'); ?>
