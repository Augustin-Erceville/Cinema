<?php
require_once "../bdd/Config.php";
require_once "../modele/Users.php";
require_once "../repository/UsersRepository.php";
session_start();
session_regenerate_id(true);

ini_set('display_errors', 1);
error_reporting(E_ALL);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $email = htmlspecialchars(trim($_POST['email'] ?? ''));
     $password = trim($_POST['password'] ?? '');

     if (!empty($email) && !empty($password)) {
          $config = new Config();
          $bdd = $config->connexion();
          $userRepository = new UsersRepository($bdd);

          $user = $userRepository->connexion($email, $password);

          if ($user instanceof Users && $user->getIdUser()) {
               $_SESSION['user_id'] = $user->getIdUser();
               $_SESSION['user_role'] = $user->getRole();

               header("Location: ../../vue/index.php");
               exit();
          } else {
               $message = "Le login/mdp n'a pas donné de résultat.";
               $_SESSION['error_message'] = $message;
               header("Location: ../../vue/connexion.php");
               exit();
          }
     } else {
          $message = "Tous les champs doivent être remplis.";
          $_SESSION['error_message'] = $message;
          header("Location: ../../vue/connexion.php");
          exit();
     }
} else {
     $message = "Méthode non autorisée.";
     $_SESSION['error_message'] = $message;
     header("Location: ../../vue/connexion.php");
     exit();
}
?>
