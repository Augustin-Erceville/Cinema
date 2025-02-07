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
    public function getFilmById($id) {
        $films=  $this->bdd->connexion()->prepare("SELECT * FROM films WHERE id_film = :id");
        $films->execute(["id"=>$id]);
        $filmObj= new Films($films->fetch(PDO::FETCH_ASSOC));
        return $filmObj;
    }
}