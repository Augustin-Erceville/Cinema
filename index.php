<?php
require_once "src/modele/Users.php";
session_start();
?>
<!DOCTYPE html>
<?php include('src/bdd/Config.php');?>
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
        <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Nouveautées</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#films">Film à l'affiche</a></li>
            <li><a class="dropdown-item" href="#planning">Planning des scéances</a></li>
            <li><a class="dropdown-item" href="#reservation">Reserver ses places</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="vue/about.php">A Propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="vue/contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Mon Compte</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="vue/inscription.php">Inscription</a></li>
            <li><a class="dropdown-item" href="vue/connexion.php">Connexion</a></li>
        </ul>
    </li>
    <?php
        if(isset($_SESSION['user']) && unserialize($_SESSION['user'])->getRole() == "Admin"){
    ?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Administration</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="vue/gestion_film.php">Gestion des films</a></li>
            <li><a class="dropdown-item" href="gestion_seance.php">Gestion des séances</a></li>
        </ul>
    </li>
    <?php
        }
    ?>
</ul>
<section id="films" class="py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Films à l'Affiche</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+1" class="card-img-top" alt="Film 1">
                    <div class="card-body">
                        <h5 class="card-title">Film 1</h5>
                        <p class="card-text">Une aventure palpitante qui vous tiendra en haleine.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+2" class="card-img-top" alt="Film 2">
                    <div class="card-body">
                        <h5 class="card-title">Film 2</h5>
                        <p class="card-text">Une comédie romantique à ne pas manquer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+3" class="card-img-top" alt="Film 3">
                    <div class="card-body">
                        <h5 class="card-title">Film 3</h5>
                        <p class="card-text">Un thriller captivant qui vous surprendra.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+4" class="card-img-top" alt="Film 4">
                    <div class="card-body">
                        <h5 class="card-title">Film 4</h5>
                        <p class="card-text">Un drame poignant qui ne laissera personne indifférent.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="vue/catalogue.php" class="btn btn-primary">Voir le catalogue complet</a>
        </div>
    </div>
</section>
<section id="planning" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Planning des Séances</h2>
        <div class="text-center">
            <img src="https://via.placeholder.com/1200x400?text=Planning+des+Séances" class="img-fluid rounded" alt="Planning">
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Voir le planning</a>
        </div>
    </div>
</section>
<section id="reservation" class="py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Réservez vos Places</h2>
        <div class="text-center">
            <img src="https://via.placeholder.com/1200x400?text=Réservez+votre+place" class="img-fluid rounded" alt="Réservation">
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">Réserver maintenant</a>
        </div>
    </div>
</section>
<?php include('./vue/footer.php') ?>