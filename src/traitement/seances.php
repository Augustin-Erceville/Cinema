<?php
require_once "../bdd/Config.php";
require_once "../modele/Seances.php";
require_once "../repository/SeancesRepository.php";

$config = new Config();
$bdd = $config->connexion();

$seances = $bdd->query("SELECT * FROM seances")->fetchAll(PDO::FETCH_ASSOC);

?>