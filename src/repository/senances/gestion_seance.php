<?php
include('header.php');
include('config.php');
$seances = $bdd->query("SELECT S.*, F.titre FROM seances S INNER JOIN films F ON F.id_film  S.ref_film")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Séances</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1>Gestion des Séances</h1>
    <a href="creer_seance.php" class="btn btn-success mb-3">➕ Ajouter une Séance</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Titre du Film</th>
            <th>Date de la Séance</th>
            <th>Heure de la Séance</th>
            <th>Salle</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($seances as $seance): ?>
            <tr>
                <td><?= htmlspecialchars($seance['id_seance']) ?></td>
                <td><?= htmlspecialchars($seance['F.titre']) ?></td>
                <td><?= htmlspecialchars($seance['date']) ?></td>
                <td><?= htmlspecialchars($seance['heure']) ?></td>
                <td><?= htmlspecialchars($seance['salle']) ?></td>
                <td>
                    <a href="voir_seance.php?id=<?= $seance['id_seance'] ?>" class="btn btn-info btn-sm">👁️</a>
                    <a href="modifier_seance.php?id=<?= $seance['id_seance'] ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a href="supprimer_seance.php?id=<?= $seance['id_seance'] ?>" class="btn btn-danger btn-sm">🗑️</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
</body>
</html>
