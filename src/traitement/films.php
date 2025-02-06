<?php
require_once "../bdd/Config.php";
require_once "../modele/Films.php";
require_once "../repository/FilmsRepository.php";

$config = new Config();
$bdd = $config->connexion();

$films = $bdd->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);
?>