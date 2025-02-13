<?php
include('header.php');
require_once "../src/bdd/Config.php";
$config = new Config();
$bdd = $config->connexion();
$stmt = $bdd->prepare("DELETE FROM films WHERE id_film = ?");
$stmt->execute([$_GET['id']]);
header("Location: film.php");
exit;
include('footer.php')
?>
