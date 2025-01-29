<?php
include('header.php');
include('config.php');

$id_seance = $_GET['id'] ?? null;

if ($id_seance) {
    $stmt = $bdd->prepare("DELETE FROM seances WHERE id_seance = ?");
    $stmt->execute([$id_seance]);
    header("Location: gestion_seances.php");
    exit;
}

include('footer.php');
?>
