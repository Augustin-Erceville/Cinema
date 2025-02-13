<?php
include ('header.php');
function recuperation_utilisateur() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projets_cinema;charset=utf8mb4', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $req = $bdd->prepare("SELECT * FROM users");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_user'])) {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projets_cinema;charset=utf8mb4', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $req = $bdd->prepare("DELETE FROM users WHERE id_user = :id_user");
        $req->bindParam(':id_user', $_POST['id_user'], PDO::PARAM_INT);
        $req->execute();
    } catch (PDOException $e) {
        die("Erreur lors de la suppression : " . $e->getMessage());
    }
}
$utilisateurs = recuperation_utilisateur();
?>

<table>
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom de famille</th>
        <th>Date naissance</th>
        <th>Numéro tel</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php if (!empty($utilisateurs)): ?>
        <?php foreach ($utilisateurs as $utilisateur): ?>
            <tr>
                <td><?= htmlspecialchars($utilisateur['prenom']); ?></td>
                <td><?= htmlspecialchars($utilisateur['nom']); ?></td>
                <td><?= htmlspecialchars($utilisateur['naissance']); ?></td>
                <td><?= htmlspecialchars($utilisateur['telephone']); ?></td>
                <td><?= htmlspecialchars($utilisateur['email']); ?></td>
                <td>
                    <form method="POST" action="">
                        <input type="hidden" name="id_user" value="<?= $utilisateur['id_user']; ?>">
                        <button type="submit" class="border rounded border-danger bg-danger-subtle px-2 py-1" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                            Supprimer
                        </button>
                    </form>
                    <form method="POST" action="user_update.php" style="display: inline;">
                        <input type="hidden" name="id_user" value="<?= $utilisateur['id_user']; ?>">
                        <button type="submit" class="border rounded border-primary bg-primary-subtle px-2 py-1">Éditer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">Aucun utilisateur trouvé.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
<?php include('footer.php') ?>
