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
        $seances =  $this->bdd->connexion()->query("SELECT * FROM seances")->fetchAll(PDO::FETCH_ASSOC);
        $seanceObj = array();
        foreach ($seances as $seance) {
            $seanceObj[] = new Seances($seance);
        }
        return $seanceObj;
    }
    public function getSeanceById($id) {
        $seances=  $this->bdd->connexion()->prepare("SELECT * FROM seances WHERE id_seance = :id");
        $seances->execute(["id"=>$id]);
        $seanceObj= new Seances($seances->fetch(PDO::FETCH_ASSOC));
        return $seanceObj;
    }
}