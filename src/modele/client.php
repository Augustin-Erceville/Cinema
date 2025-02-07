<?php

class client extends Users{
    public function __construct($donnees){
        $this->hydrate($donnees);
        $this->id_user=$donnees['id_user'];
        $this->nom=$donnees['nom'];
        $this->prenom=$donnees['prenom'];
        $this->email=$donnees['email'];
        $this->password=$donnees['password'];
    }

    public function hydrate($donnees){
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);

            }
        }
    }
    public function

}