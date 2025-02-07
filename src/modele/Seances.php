<?php
class Seances {
private int $id_seance;
private string $refFilm;
private string $salle;
private int $placeDispo;
private string $date;
private string $heure;

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