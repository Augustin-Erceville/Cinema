<?php

class Reservations {
    private $id_reservation;
    private $ref_user;
    private $ref_seance;
    private $nbr_place;
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
    public function getIdReservation()
    {
        return $this->id_reservation;
    }
    public function setIdReservation($id_reservation)
    {
        $this->id_reservation = $id_reservation;
    }
    public function getNbrPlace()
    {
        return $this->nbr_place;
    }
    public function setNbrPlace($nbr_place)
    {
        $this->nbr_place = $nbr_place;
    }
    public function getRefSeance()
    {
        return $this->ref_seance;
    }
    public function setRefSeance($ref_seance)
    {
        $this->ref_seance = $ref_seance;
    }
    public function getRefUser()
    {
        return $this->ref_user;
    }
    public function setRefUser($ref_user)
    {
        $this->ref_user = $ref_user;
    }
}