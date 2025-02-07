<?php

class Reports
{
    private int $id_report;
    private int $ref_film;
    private int $salles;
    private int $place_dispo;
    private String $date;
    private string $heure;
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

    public function getIdReport(): int
    {
        return $this->id_report;
    }

    public function setIdReport(int $id_report): void
    {
        $this->id_report = $id_report;
    }

    public function getRefFilm(): int
    {
        return $this->ref_film;
    }

    public function setRefFilm(int $ref_film): void
    {
        $this->ref_film = $ref_film;
    }

    public function getSalles(): int
    {
        return $this->salles;
    }

    public function setSalles(int $salles): void
    {
        $this->salles = $salles;
    }

    public function getPlaceDispo(): int
    {
        return $this->place_dispo;
    }

    public function setPlaceDispo(int $place_dispo): void
    {
        $this->place_dispo = $place_dispo;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getHeure(): string
    {
        return $this->heure;
    }

    public function setHeure(string $heure): void
    {
        $this->heure = $heure;
    }