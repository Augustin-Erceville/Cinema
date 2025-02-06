<?php

class Seance {
    private $id_seance;
    private $ref_film;
    private $salle;
    private $place_dispo;
    private $date;
    private $heure;
    public function __construct($donnees){
        $this->hydrate($donnees);
    }
    public function hydrate($donnees){
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    public function getIdSeance()
    {
        return $this->id_seance;
    }
    public function setIdSeance($id_seance)
    {
        $this->id_seance = $id_seance;
    }
    public function getRefFilm()
    {
        return $this->ref_film;
    }
    public function setRefFilm($ref_film)
    {
        $this->ref_film = $ref_film;
    }
    public function getSalle()
    {
        return $this->salle;
    }
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }
    public function getPlaceDispo()
    {
        return $this->place_dispo;
    }
    public function setPlaceDispo($place_dispo)
    {
        $this->place_dispo = $place_dispo;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getHeure()
    {
        return $this->heure;
    }
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

}