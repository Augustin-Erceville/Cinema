<?php
require_once "../bdd/Config.php";
require_once "../modele/Reports.php";
require_once "../repository/ReportsRepository.php";

$config = new Config();
$bdd = $config->connexion();

$reports = $bdd->query("SELECT * FROM reports")->fetchAll(PDO::FETCH_ASSOC);
?>