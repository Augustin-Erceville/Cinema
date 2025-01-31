<!DOCTYPE html>
<?php
include('../src/bdd/config.php');
include('../src/traitement/connexion.php');
?>
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
        <a class="nav-link" aria-current="page" href="#">A Propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Mon Compte</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
            <li><a class="dropdown-item active" href="connexion.php">Connexion</a></li>
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

<div class="container mt-3">
    <h1 class="mb-4">Connexion</h1>
    <?php if (!empty($message)) : ?>
        <div class="alert alert-danger"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
    <form action="" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Adresse mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" name="envoyer" class="btn btn-primary">Se connecter</button>
    </form>
    <p>
        Pas encore de compte ? <a href="inscription.php">S'inscrire</a>
</div>
<?php include('footer.php') ?>