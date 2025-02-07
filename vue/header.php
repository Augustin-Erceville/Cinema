<?php
require_once "../src/modele/Users.php";
session_start();
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
        <a class="nav-link" aria-current="page" href="index.php">Acceuil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Nouveautées</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php#films">Film à l'affiche</a></li>
            <li><a class="dropdown-item" href="index.php#planning">Planning des scéances</a></li>
            <li><a class="dropdown-item" href="index.php#reservation">Reserver ses places</a></li>
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
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="deconnexion.php">Deconnexion</a></li>
        </ul>
    </li>
    <?php
    if(isset($_SESSION['user']) && unserialize($_SESSION['user'])->getRole() == "Admin"){
        ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Administration</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="user.php">Gestion des utilisateurs</a></li>
                <li><a class="dropdown-item" href="film.php">Gestion des films</a></li>
                <li><a class="dropdown-item" href="seance.php">Gestion des séances</a></li>
            </ul>
        </li>
        <?php
    }
    ?>
</ul>