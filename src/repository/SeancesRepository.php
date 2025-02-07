<?php

class SeancesRepository {
    private $bdd;

    function __construct() {
        $this->bdd = new Config();
    }

    public function getSeances() {
        return  $this->bdd->connexion()->query("SELECT * FROM seances")->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getSeancesObj() {
        $films =  $this->bdd->connexion()->query("SELECT * FROM seances")->fetchAll(PDO::FETCH_ASSOC);
        $seanceObj = array();
        foreach ($films as $seance) {
            $seanceObj[] = new Seances($seance);

        }
        return $seanceObj;
    }

}