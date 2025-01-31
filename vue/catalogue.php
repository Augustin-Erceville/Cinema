<!DOCTYPE html>
<?php include('../src/bdd/config.php');?>
<html>
<head>
    <title>DugnyCiné - Catalogue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<h1 class="text-center" style="text-transform: uppercase">
    DugnyCiné
</h1>A
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

<div class="catalogue-container">
    <h1>Catalogue des Films</h1>
    <div class="films">
        <div class="film">
            <img src="affiche1.jpg" alt="Affiche du film 1">
            <h2>Titre du Film 1</h2>
            <p><strong>Genre :</strong> Action</p>
            <p><strong>Résumé :</strong> Un héros doit sauver le monde contre une menace imminente.</p>
        </div>

        <div class="film">
            <img src="affiche2.jpg" alt="Affiche du film 2">
            <h2>Titre du Film 2</h2>
            <p><strong>Genre :</strong> Comédie</p>
            <p><strong>Résumé :</strong> Une série d'événements hilarants met à l'épreuve l'amitié de deux colocataires.</p>
        </div>
        <div class="film">
            <img src="affiche3.jpg" alt="Affiche du film 3">
            <h2>Titre du Film 3</h2>
            <p><strong>Genre :</strong> Drame</p>
            <p><strong>Résumé :</strong> Une histoire émouvante d'un individu surmontant des défis personnels.</p>
        </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>