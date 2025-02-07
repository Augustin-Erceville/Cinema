<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id_user'])) {
    die("ID utilisateur manquant.");
}
$id_user = intval($_POST['id_user']);
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projets_cinema;charset=utf8mb4', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
try {
    $req = $bdd->prepare("SELECT * FROM users WHERE id_user = :id_user");
    $req->bindParam(':id_user', $id_user, PDO::PARAM_INT);
    $req->execute();
    $utilisateur = $req->fetch(PDO::FETCH_ASSOC);

    if (!$utilisateur) {
        die("Utilisateur non trouvé.");
    }
} catch (PDOException $e) {
    die("Erreur lors de la récupération des données : " . $e->getMessage());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $naissance = $_POST['naissance'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    try {
        $update = $bdd->prepare("
            UPDATE utilisateur 
            SET prenom = :prenom, nom = :nom, naissance = :naissance, telephone = :telephone, email = :email 
            WHERE id_user = :id_user
        ");
        $update->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $update->bindParam(':nom', $nom, PDO::PARAM_STR);
        $update->bindParam(':naissance', $naissance, PDO::PARAM_STR);
        $update->bindParam(':telephone', $telephone, PDO::PARAM_STR);
        $update->bindParam(':email', $email, PDO::PARAM_STR);
        $update->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $update->execute();

        echo "<script>alert('Utilisateur mis à jour avec succès !');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
    } catch (PDOException $e) {
        die("Erreur lors de la mise à jour : " . $e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éditer utilisateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container">
<h1 class="text-center text-uppercase">Éditer l'utilisateur</h1>
<form method="POST" action="" class="bg-secondary-subtle px-2 py-2 border border-black rounded border-2">
    <input type="hidden" name="id_user" value="<?= $id_user; ?>">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="prenom" value="<?= htmlspecialchars($utilisateur['prenom']); ?>" required>
        <label for="floatingInput">Prénom :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="nom" value="<?= htmlspecialchars($utilisateur['nom']); ?>" required>
        <label for="floatingInput">Nom de famille :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingInput" name="naissance" value="<?= htmlspecialchars($utilisateur['naissance']); ?>" required>
        <label for="floatingInput">Date de naissance :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" name="telephone" value="<?= htmlspecialchars($utilisateur['telephone']); ?>" required>
        <label for="floatingInput">Téléphone :</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="email" value="<?= htmlspecialchars($utilisateur['email']); ?>" required>
        <label for="floatingInput">Email :</label>
    </div>
    <div class="mb-3">
        <button type="submit" name="modifier" class="btn btn-outline-success">Enregistrer les modifications</button>
        <a href="index.php" class="btn btn-outline-danger">Annuler</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
