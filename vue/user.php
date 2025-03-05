<?php
include ('header.php');
require_once "../src/bdd/Config.php";
require_once "../src/repository/UsersRepository.php";
require_once "../src/modele/Users.php";

$config = new Config();
$bdd = $config->connexion();
$usersRepo = new UsersRepository($bdd);

$users = $usersRepo->getUsers();
?>

<div class="container py-5">
    <h1>Gestion des Utilisateurs</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Rôle</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($users)){ ?>
            <?php foreach ($users as $user){
                $userId = $user->getIdUser();
                ?>
                <tr>
                    <td><?= htmlspecialchars($user->getPrenom()) ?></td>
                    <td><?= htmlspecialchars($user->getNom()) ?></td>
                    <td><?= htmlspecialchars($user->getEmail()) ?></td>
                    <td><?= htmlspecialchars($user->getTelephone()) ?></td>
                    <td><?= htmlspecialchars($user->getRole()) ?></td>
                    <td>
                        <a href="user_read.php?id=<?= $userId ?>" class="btn btn-info btn-sm">👁️</a>
                        <a href="user_update.php?id=<?= $userId ?>" class="btn btn-warning btn-sm">✏️</a>
                        <a href="user_delete.php?id=<?= $userId ?>" class="btn btn-danger btn-sm">🗑️</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }else{ ?>
            <tr>
                <td colspan="7" class="text-center">Aucun utilisateur trouvé.</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>
