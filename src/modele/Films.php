<?php
class Films{
    private $titre;
    private $description;
    private $idFilm;
    private $genre;
    private $duree;
    private $affiche;
    private $sortie;

    public function __construct($donnees)
    {
        $this->hydrate($donnees);

    }
    public function hydrate($donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);

            }
        }
    }

    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getAffiche(){
        return $this->affiche;
    }
    public function setAffiche($affiche){
        $this->affiche = $affiche;
    }
    public function getDuree(){
        return $this->duree;
    }
    public function setDuree($duree){
        $this->duree = $duree;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function getIdFilm(){
        return $this->idFilm;
    }
    public function setIdFilm($idFilm){
        $this->idFilm = $idFilm;
    }
    public function setId_film($idFilm){
        $this->idFilm = $idFilm;
    }

    /**
     * @return mixed
     */
    public function getSortie()
    {
        return $this->sortie;
    }

    /**
     * @param mixed $sortie
     */
    public function setSortie($sortie)
    {
        $this->sortie = $sortie;
    }

}
