<?php
$pdo = new PDO('mysql:host=localhost;dbname=projets_cinema', 'root', '');
$films = $pdo->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Films</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1>Gestion des Films</h1>
    <a href="creer_film.php" class="btn btn-success mb-3">➕</a>
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
        <?php foreach ($films as $film): ?>
            <tr>
                <td><?= htmlspecialchars($film['id_film']) ?></td>
                <td><?= htmlspecialchars($film['titre']) ?></td>
                <td><?= htmlspecialchars($film['genre']) ?></td>
                <td><?= htmlspecialchars($film['sortie']) ?></td>
                <td><?= htmlspecialchars($film['duree']) ?></td>
                <td>
                    <a href="voir_film.php?id=<?= $film['id_film'] ?>" class="btn btn-info btn-sm">👁️</a>
                    <a href="modifier_film.php?id=<?= $film['id_film'] ?>" class="btn btn-warning btn-sm">✏️</a>
                    <a href="supprimer_film.php?id=<?= $film['id_film'] ?>" class="btn btn-danger btn-sm">🗑️</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
