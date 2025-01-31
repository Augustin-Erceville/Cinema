<?php
require_once "../bdd/Config.php";
require_once "../modele/Users.php";
require_once "../repository/UsersRepository.php";
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
            $userRepository = new UsersRepository();
            $user = new Users([
                'prenom' => $prenom,
                'nom' => $nom,
                'naissance' => $naissance,
                'telephone' => $telephone,
                'email' => $email,
                'password' => $password,
                'role' => $role
            ]);
            $resultat = $userRepository->inscription($user);

            if ($resultat) {
                header('Location: ../../vue/connexion.php');
            } else {
                $message = "Erreur lors de l'inscription. Veuillez réessayer.";
                header('Location: ../../vue/insciption.php?erreur='.$message);

            }
        } else {
            $message = "Adresse email invalide.";
            header('Location: ../../vue/insciption.php?erreur='.$message);

        }
    } else {
        $message = "Tous les champs sont obligatoires.";
        header('Location: ../../vue/insciption.php?erreur='.$message);
    }
}
?>