<?php
$pdo = new PDO('mysql:host=localhost;dbname=projets_cinema', 'root', '');
$stmt = $pdo->prepare("DELETE FROM films WHERE id_film = ?");
$stmt->execute([$_GET['id']]);
header("Location: gestion_film.php");
exit;
?>
