<?php
require_once "../bdd/Config.php";
require_once "../modele/Users.php";
require_once "../repository/UsersRepository.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['envoyer'])) {
     $prenom = htmlspecialchars(trim($_POST['prenom'] ?? ''));
     $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
     $naissance = htmlspecialchars(trim($_POST['naissance'] ?? ''));
     $telephone = htmlspecialchars(trim($_POST['telephone'] ?? ''));
     $email = htmlspecialchars(trim($_POST['email'] ?? ''));
     $password = trim($_POST['password'] ?? '');
     $role = "Client";



     if (!empty($prenom) && !empty($nom) && !empty($naissance) && !empty($telephone) && !empty($email) && !empty($password)) {

          if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

               if (strlen($password) < 8) {
                    $message = "Le mot de passe doit contenir au moins 8 caractères.";
                    $_SESSION['error_message'] = $message;
                    header('Location: ../../vue/inscription.php');
                    exit();
               }

               $bdd = new Config();
               $userRepository = new UsersRepository($bdd->Connexion());

               $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

               $user = new Users([
                    'prenom' => $prenom,
                    'nom' => $nom,
                    'naissance' => $naissance,
                    'telephone' => $telephone,
                    'email' => $email,
                    'password' => $hashedPassword,
                    'role' => $role
               ]);

               if ($userRepository->inscription($user)) {
                    $_SESSION['success_message'] = "Inscription réussie. Vous pouvez maintenant vous connecter.";
                    header('Location: ../../vue/connexion.php');
                    exit();
               } else {
                    $_SESSION['error_message'] = "Erreur lors de l'inscription. Veuillez réessayer.";
                    header('Location: ../../vue/inscription.php');
                    exit();
               }

          } else {
               $message = "Adresse email invalide.";
               $_SESSION['error_message'] = $message;
               header('Location: ../../vue/inscription.php');
               exit();
          }

     } else {
          $message = "Tous les champs sont obligatoires.";
          $_SESSION['error_message'] = $message;
          header('Location: ../../vue/inscription.php');
          exit();
     }
} else {
     $message = "Méthode non autorisée.";
     $_SESSION['error_message'] = $message;
     header('Location: ../../vue/inscription.php');
     exit();
}
?>
