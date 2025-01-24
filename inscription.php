<?php
include ('header.php');

if (isset($_POST['envoyer'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $naissance = $_POST['naissance'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = "Client";

    if (!empty($prenom) && !empty($nom) && !empty($naissance) && !empty($telephone) &&
        !empty($email) && !empty($password)) {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $req = $bdd->prepare('INSERT INTO users (prenom, nom, telephone, email, password, naissance, role) VALUES (:prenom, :nom, :telephone, :email, :password, :naissance, :role)');
            $success = $req->execute([
                'prenom' => $prenom,
                'nom' => $nom,
                'telephone' => $telephone,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'naissance' => $naissance,
                'role' => $role
            ]);

            if ($success) {
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            } else {$message = "Erreur lors de l'inscription. Veuillez réessayer.";}
        } else {$message = "Adresse email invalide.";}
    } else {$message = "Tous les champs sont obligatoires.";
    }}
?>
<div class="container">
    <h1>Inscription</h1>
    <form action="" method="post">
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

        <?php if (isset($message)) : ?>
    <?= $message ?><p></p>
    <div class="alert alert-success" role="alert">
        Vous êtes connecter
    </div>
    <?php endif; ?>
</div>
<?php include('footer.php') ?>