<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription et Connexion</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
<div class="container">
    <h2>Inscription</h2>
    <form method="POST" action="">
        <label for="fullname">Nom complet :</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit" name="register">S'inscrire</button>
    </form>
</div>

<div class="container">
    <h2>Connexion</h2>
    <form method="POST" action="">
        <label for="login_email">Adresse e-mail :</label>
        <input type="email" id="login_email" name="login_email" required>

        <label for="login_password">Mot de passe :</label>
        <input type="password" id="login_password" name="login_password" required>

        <button type="submit" name="login">Se connecter</button>
    </form>
</div>

<?php
// Connexion à la base de données (à adapter avec vos paramètres)
$host = 'localhost';
$dbname = 'cinema';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}

// Gestion de l'inscription
if (isset($_POST['register'])) {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo '<div class="container error">Les mots de passe ne correspondent pas.</div>';
    } else {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO users (fullname, email, password) VALUES (:fullname, :email, :password)");
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute()) {
            echo '<div class="container success">Inscription réussie. Vous pouvez maintenant vous connecter.</div>';
        } else {
            echo '<div class="container error">Une erreur est survenue. Veuillez réessayer.</div>';
        }
    }
}

// Gestion de la connexion
if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['login_email']);
    $password = $_POST['login_password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        echo '<div class="container success">Connexion réussie. Bienvenue, ' . htmlspecialchars($user['fullname']) . '.</div>';
    } else {
        echo '<div class="container error">Adresse e-mail ou mot de passe incorrect.</div>';
    }
}
?>
</body>
</html>
