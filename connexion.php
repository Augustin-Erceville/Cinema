<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include ('header.php');
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = trim($_POST['password'] ?? '');
    if (!empty($email) && !empty($password)) {
        try {
            $req = $bdd->prepare('SELECT id_user, email, password FROM utilisateur WHERE email = :email');
            $req->execute(['email' => $email]);
            $user = $req->fetch();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    // Connexion réussie
                    $_SESSION['id_user'] = $user['id_user'];
                    $_SESSION['email'] = $user['email'];
                    header('Location: index.php');
                    exit();
                } else {
                    $message = "Mot de passe incorrect.";
                }
            } else {
                $message = "Adresse email inconnue.";
            }
        } catch (PDOException $e) {
            $message = "Erreur serveur : " . $e->getMessage();
        }
    } else {
        $message = "Tous les champs doivent être remplis.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>
</html>