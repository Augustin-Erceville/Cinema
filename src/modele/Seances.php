<?php

class Seance {
    private $id_seance;
    private $ref_film;
    private $salle;
    private $place_dispo;
    private $date;
    private $heure;
    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getIdSeance(): int
    {
        return $this->id_seance;
    }

    public function setIdSeance(int $id_seance): void
    {
        $this->id_seance = $id_seance;
    }

    public function getRefFilm(): int
    {
        return $this->ref_film;
    }

    public function setRefFilm(int $ref_film): void
    {
        $this->ref_film = $ref_film;
    }

    public function getSalle(): string
    {
        return $this->salle;
    }

    public function setSalle(string $salle): void
    {
        $this->salle = $salle;
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
}
?>