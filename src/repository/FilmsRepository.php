<?php

class FilmsRepository {
    private $bdd;

    function __construct() {
        $this->bdd = new Config();
    }

    public function getFilms() {
        return  $this->bdd->connexion()->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);

    }
    public function getFilmsObj() {
        $films=  $this->bdd->connexion()->query("SELECT * FROM films")->fetchAll(PDO::FETCH_ASSOC);
        $filmsObj= array();
        foreach ($films as $film) {
            $filmsObj[]= new Films($film);
        }
        return $filmsObj;
    }
}