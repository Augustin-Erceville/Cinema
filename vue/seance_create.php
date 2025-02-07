<?php
include('header.php');
$stmt = $bdd->prepare("SELECT id_film, titre FROM films");
$stmt->execute();
$films = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $bdd->prepare("INSERT INTO seances (id_film, date_heure, salle) VALUES (?, ?, ?)");
    $stmt->execute([
        $_POST['id_film'],
        $_POST['date_heure'],
        $_POST['salle']
    ]);
    header("Location: seance.php");
    exit;
}
?>

<div class="container py-5">
    <h1>Ajouter une Séance</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="id_film" class="form-label">Film</label>
            <select class="form-select" id="id_film" name="id_film" required>
                <?php foreach ($films as $film): ?>
                    <option value="<?= $film['id_film'] ?>"><?= htmlspecialchars($film['titre']) ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="date_heure" class="form-label">Date et Heure</label>
            <input type="datetime-local" class="form-control" id="date_heure" name="date_heure" required>
        </div>
        <div class="mb-3">
            <label for="salle" class="form-label">Salle</label>
            <input type="text" class="form-control" id="salle" name="salle" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<?php include('footer.php'); ?>
