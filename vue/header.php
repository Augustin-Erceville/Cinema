<?php include('../src/bdd/config.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Voir un Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<h1 class="text-center" style="text-transform: uppercase">
    DugnyCiné
    <?php if (isset($_SESSION['id_user'])): ?>
        <div style="position: absolute; top: 20px; right: 20px;">
            <span style="background-color: green; color: white; padding: 5px 10px; border-radius: 50%;">Connecté</span>
        </div>
    <?php endif; ?>
</h1>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../../index.php">Acceuil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Nouveautées</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../index.php#films">Film à l'affiche</a></li>
            <li><a class="dropdown-item" href="../../index.php#planning">Planning des scéances</a></li>
            <li><a class="dropdown-item" href="../../index.php#reservation">Reserver ses places</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="#">A Propos</a>
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
</ul>