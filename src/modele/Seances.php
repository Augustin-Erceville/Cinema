<?php
class Seances {
private $id_seance;
private $refFilm;
private $salle;
private $placeDispo;
private $date;
private $heure;

public function __construct(array $data) {
$this->id_seance = $data['id_seance'] ?? null;
$this->refFilm = $data['refFilm'] ?? '';
$this->salle = $data['salle'] ?? '';
$this->placeDispo = $data['placeDispo'] ?? 0;
$this->date = $data['date'] ?? '';
$this->heure = $data['heure'] ?? '';
}

public function getIdSeance() {
return $this->id_seance;
}

public function getRefFilm() {
return $this->refFilm;
}

public function getSalle() {
return $this->salle;
}

public function getPlaceDispo() {
return $this->placeDispo;
}

public function getDate() {
return $this->date;
}

public function getHeure() {
return $this->heure;
}
}
?>