<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = trim($_POST['password'] ?? '');
    if (!empty($email) && !empty($password)) {
        try {
            $req = $bdd->prepare('SELECT id_user, email, password FROM users WHERE email = :email');
            $req->execute(['email' => $email]);
            $user = $req->fetch();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    // Connexion réussie
                    $_SESSION['id_user'] = $user['id_user'];
                    $_SESSION['email'] = $user['email'];
                    header('Location: ../index.php');
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