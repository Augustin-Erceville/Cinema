<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        if ($email === 'test@example.com' && $password === '1234') {
            echo "Connexion réussie. Bienvenue, utilisateur.";
        } else {
            echo "Email ou mot de passe incorrect.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>
<form action="connexioncine.php" method="post">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Se connecter</button>
</form>
</body>
</html>

