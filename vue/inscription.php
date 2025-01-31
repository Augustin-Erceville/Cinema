
<?php
include('../src/bdd/Config.php');
?>
<?php include ("header.php")?>

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