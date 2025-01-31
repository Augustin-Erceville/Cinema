<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $bdd->prepare("INSERT INTO films (titre, description, genre, sortie, duree, affiche) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['titre'],
        $_POST['description'],
        $_POST['genre'],
        $_POST['sortie'],
        $_POST['duree'],
        $_POST['affiche']
    ]);
    header("Location: gestion_film.php");
    exit;
}
?>