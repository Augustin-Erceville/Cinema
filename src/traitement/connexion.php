<?php
require_once "../bdd/Config.php";
require_once "../modele/Users.php";
require_once "../repository/UsersRepository.php";
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = trim($_POST['password'] ?? '');
    if (!empty($email) && !empty($password)) {
        $userRepository = new UsersRepository();
        $user = new Users([
            'email' => $email,
            'password' => $password,
        ]);
        $user = $userRepository->connexion($user);
        if (!empty($user->getIdUser())){
            $_SESSION['user'] = serialize($user);
            header("Location: ../../vue/index.php");
        }else{
            $message = "Le login/mdp n'a pas donné de résultat";

            header("Location: ../../vue/connexion.php?erreur=".$message);
        }

    } else {
        $message = "Tous les champs doivent être remplis.";
        header("Location: ../../vue/connexion.php?erreur=".$message);
    }
}else{
    $message = "pas post ?";
    header("Location: ../../vue/connexion.php?erreur=".$message);
}
?>