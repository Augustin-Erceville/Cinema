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

// Traitement du formulaire de mise à jour
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $prenom = $_POST['prenom'] ?? '';
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $naissance = $_POST['naissance'] ?? '';
    $role = $_POST['role'] ?? '';

    // Mettre à jour l'objet utilisateur
    $user->setPrenom($prenom);
    $user->setNom($nom);
    $user->setEmail($email);
    $user->setTelephone($telephone);
    $user->setNaissance($naissance);
    $user->setRole($role);

    // Enregistrement en base de données
    if ($usersRepo->updateUser($user)) {
        echo "<div class='alert alert-success'>Utilisateur mis à jour avec succès.</div>";
    } else {
        echo "<div class='alert alert-danger'>Erreur lors de la mise à jour.</div>";
    }
}
?>

<div class="container py-5">
    <h1>Modifier l'utilisateur</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" name="prenom" id="prenom" class="form-control" value="<?= htmlspecialchars($user->getPrenom()) ?>" required>
        </div>

        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control" value="<?= htmlspecialchars($user->getNom()) ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($user->getEmail()) ?>" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone :</label>
            <input type="text" name="telephone" id="telephone" class="form-control" value="<?= htmlspecialchars($user->getTelephone()) ?>" required>
        </div>

        <div class="mb-3">
            <label for="naissance" class="form-label">Date de naissance :</label>
            <input type="date" name="naissance" id="naissance" class="form-control" value="<?= htmlspecialchars($user->getNaissance()) ?>" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Rôle :</label>
            <select name="role" id="role" class="form-control" required>
                <option value="admin" <?= $user->getRole() === 'admin' ? 'selected' : '' ?>>Admin</option>
                <option value="user" <?= $user->getRole() === 'user' ? 'selected' : '' ?>>Utilisateur</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="user.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>

<?php include('footer.php'); ?>
