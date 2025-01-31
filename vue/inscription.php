<!DOCTYPE html>
<?php
include('../src/bdd/Config.php');
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
        <a class="nav-link" aria-current="page" href="about.php">A Propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Mon Compte</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item active" href="inscription.php">Inscription</a></li>
            <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Administration</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="vue/gestion_film.php">Gestion des films</a></li>
            <li><a class="dropdown-item" href="gestion_seance.php">Gestion des séances</a></li>
        </ul>
    </li>
</ul>

<div class="container mt-3">
    <h1>Inscription</h1>
    <form action="../src/traitement/inscription.php" method="post">
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label><br>
            <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom" aria-label="default input example" required/>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de famille</label>
            <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom de famille" aria-label="default input example" required>
        </div>
        <div class="mb-3">
            <label for="naissance">Date de naissance</label>
            <input type="date" name="naissance" class="form-control" id="naissance" aria-label="default input example" required/>
            <div class="valid-feedback">
                Champ valide
            </div>
        </div>
        <div class="mb-3">
            <label for="telephone">Numéro de téléphone</label>
            <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Votre numéro de téléphone" aria-label="default input example" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="adresse@email.com" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Votremotdepasse" aria-describedby="passwordHelpBlock" required>
        </div>
        <div class="d-grid gap-2">
            <input type="submit" class="btn btn-outline-success" name="envoyer" id="envoyer" value="S'inscrire"/>
        </div>
    </form>
    <p>
        Déjà un compte ? <a href="connexion.php">Se connecter</a>

        <?php if (isset($_GET["erreur"])) : ?>
    <?= $_GET["erreur"] ?><p></p>
    <div class="alert alert-success" role="alert">
        Vous êtes connecter
    </div>
    <?php endif; ?>
</div>
<?php include('footer.php') ?>