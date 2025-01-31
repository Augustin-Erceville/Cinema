<?php
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
                header('Location: ../index.php');
                exit();
            } else {$message = "Erreur lors de l'inscription. Veuillez réessayer.";}
        } else {$message = "Adresse email invalide.";}
    } else {$message = "Tous les champs sont obligatoires.";
    }}
?>