<?php
$films = $bdd->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<?php include('../src/bdd/Config.php');?>
<html>
<head>
    <title>Voir un Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<h1 class="text-center" style="text-transform: uppercase">
    DugnyCiné
</h1>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../index.php">Acceuil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Nouveautées</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../index.php#films">Film à l'affiche</a></li>
            <li><a class="dropdown-item" href="../index.php#planning">Planning des scéances</a></li>
            <li><a class="dropdown-item" href="../index.php#reservation">Reserver ses places</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="about.php">A Propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Mon Compte</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
            <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Administration</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="gestion_film.php">Gestion des films</a></li>
            <li><a class="dropdown-item" href="gestion_seance.php">Gestion des séances</a></li>
        </ul>
    </li>
</ul>
<h1 class="text-center" style="text-transform: uppercase">
    DugnyCiné
</h1>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../index.php">Acceuil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Nouveautées</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../index.php#films">Film à l'affiche</a></li>
            <li><a class="dropdown-item" href="../index.php#planning">Planning des scéances</a></li>
            <li><a class="dropdown-item" href="../index.php#reservation">Reserver ses places</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="about.php">A Propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Mon Compte</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
            <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Administration</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="gestion_film.php">Gestion des films</a></li>
            <li><a class="dropdown-item" href="gestion_seance.php">Gestion des séances</a></li>
        </ul>
    </li>
</ul>

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
<?php include('footer.php') ?>