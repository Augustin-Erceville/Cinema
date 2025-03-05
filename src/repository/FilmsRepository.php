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

    public function updateFilm(Films $film) {
        $req = $this->bdd->connexion()->prepare(
            'UPDATE films 
             SET titre = :titre, description = :description, duree = :duree, 
                 genre = :genre, sortie = :sortie, affiche = :affiche 
             WHERE id_film = :id_film'
        );

        return $req->execute([
            'id_film'   => $film->getIdFilm(),
            'titre'    => $film->getTitre(),
            'description' => $film->getDescription(),
            'sortie' => $film->getSortie(),
            'affiche'     => $film->getAffiche(),
            'duree' => $film->getDuree(),
        ]);
    }
}