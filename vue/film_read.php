<?php include('header.php');
$stmt = $bdd->prepare("SELECT * FROM films WHERE id_film = ?");
$stmt->execute([$_GET['id']]);
$film = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Voir un Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1>Détails du Film</h1>
    <p><strong>Titre :</strong> <?= htmlspecialchars($film['titre']) ?></p>
    <p><strong>Description :</strong> <?= htmlspecialchars($film['description']) ?></p>
    <p><strong>Genre :</strong> <?= htmlspecialchars($film['genre']) ?></p>
    <p><strong>Date de sortie :</strong> <?= htmlspecialchars($film['sortie']) ?></p>
    <p><strong>Durée :</strong> <?= htmlspecialchars($film['duree']) ?></p>
    <p><strong>Affiche :</strong> <img src="<?= htmlspecialchars($film['affiche']) ?>" alt="Affiche" style="max-width: 200px;"></p>
    <a href="film.php" class="btn btn-secondary">Retour</a>
</div>
<?php include('footer.php') ?>