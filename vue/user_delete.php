<?php
include ('header.php');
require_once "../src/bdd/Config.php";
require_once "../src/repository/UsersRepository.php";
require_once "../src/modele/Users.php";

$config = new Config();
$bdd = $config->connexion();
$usersRepo = new UsersRepository($bdd);

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID utilisateur manquant.");
}

$userId = $_GET['id'];
$user = $usersRepo->getUserById($userId);

if (!$user) {
    die("Utilisateur non trouvé.");
}
?>

<div class="container py-5">
    <h1>Profil de l'utilisateur</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?= htmlspecialchars($user->getIdUser()) ?></td>
        </tr>
        <tr>
            <th>Prénom</th>
            <td><?= htmlspecialchars($user->getPrenom()) ?></td>
        </tr>
        <tr>
            <th>Nom</th>
            <td><?= htmlspecialchars($user->getNom()) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= htmlspecialchars($user->getEmail()) ?></td>
        </tr>
        <tr>
            <th>Téléphone</th>
            <td><?= htmlspecialchars($user->getTelephone()) ?></td>
        </tr>
        <tr>
            <th>Date de naissance</th>
            <td><?= htmlspecialchars($user->getNaissance()) ?></td>
        </tr>
        <tr>
            <th>Rôle</th>
            <td><?= htmlspecialchars($user->getRole()) ?></td>
        </tr>
    </table>
    <a href="user.php" class="btn btn-primary">Retour</a>
    <a href="user_update.php?id=<?= urlencode($user->getIdUser()) ?>" class="btn btn-warning">Modifier</a>
    <a href="user_delete.php?id=<?= urlencode($user->getIdUser()) ?>" class="btn btn-danger">Supprimer</a>
</div>

<?php include('footer.php'); ?>
