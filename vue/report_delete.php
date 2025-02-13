<?php
include('header.php');
require_once "../src/bdd/Config.php";
$config = new Config();
$bdd = $config->connexion();
$stmt = $bdd->prepare("DELETE FROM reports WHERE id_report = ?");
$stmt->execute([$_GET['id']]);
header("Location: reports.php");

exit;
include('footer.php')
?>
