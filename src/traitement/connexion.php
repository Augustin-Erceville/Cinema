<?php
require_once "../bdd/Config.php";
require_once "../modele/Users.php";
require_once "../repository/UsersRepository.php";

session_start();
session_regenerate_id(true);

ini_set('display_errors', 1);
error_reporting(E_ALL);

$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
     $password = isset($_POST['password']) ? trim($_POST['password']) : '';

     if (!empty($email) && !empty($password)) {
          try {
               $config = new Config();
               $bdd = $config->connexion();
               $userRepository = new UsersRepository($bdd);
               $user = $userRepository->connexion($email, $password);

               if ($user instanceof Users && $user->getIdUser()) {
                    $_SESSION['user_id'] = $user->getIdUser();
                    $_SESSION['user_role'] = $user->getRole();
                    $_SESSION['user_name'] = $user->getPrenom() . ' ' . $user->getNom();

                    header("Location: ../../vue/acceuil.php");
                    exit();
               } else {
                    $message = "Identifiants incorrects. Veuillez réessayer.";
               }
          } catch (PDOException $e) {
               $message = "Erreur de connexion à la base de données.";
               error_log("Erreur PDO : " . $e->getMessage());
          }
     } else {
          $message = "Tous les champs doivent être remplis.";
     }
} else {
     $message = "Méthode non autorisée.";
}
$_SESSION['error_message'] = $message;
header("Location: ../../vue/connexion.php");
exit();
?>
