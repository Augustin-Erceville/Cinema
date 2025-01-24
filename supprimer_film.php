<?php
include ('header.php');
$stmt = $pdo->prepare("DELETE FROM films WHERE id_film = ?");
$stmt->execute([$_GET['id']]);
header("Location: gestion_film.php");
exit;
?>
