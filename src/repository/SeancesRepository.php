<?php
class SeancesRepository {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function findAll(): array
    {
        $query = $this->db->query('SELECT * FROM seances');
        return $query->fetchAll(PDO::FETCH_CLASS, 'Seance');
    }

    public function findById(int $id): ?Seance
    {
        $query = $this->db->prepare('SELECT * FROM seances WHERE id_seance = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchObject('Seance');
    }

    public function create(Seance $seance): bool
    {
        $query = $this->db->prepare('INSERT INTO seances (ref_film, salle, place_dispo, date, heure) VALUES (:ref_film, :salle, :place_dispo, :date, :heure)');
        $query->bindValue(':ref_film', $seance->getRefFilm(), PDO::PARAM_INT);
        $query->bindValue(':salle', $seance->getSalle(), PDO::PARAM_STR);
        $query->bindValue(':place_dispo', $seance->getPlaceDispo(), PDO::PARAM_INT);
        $query->bindValue(':date', $seance->getDate(), PDO::PARAM_STR);
        $query->bindValue(':heure', $seance->getHeure(), PDO::PARAM_STR);
        return $query->execute();
    }

    public function update(Seance $seance): bool
    {
        $query = $this->db->prepare('UPDATE seances SET ref_film = :ref_film, salle = :salle, place_dispo = :place_dispo, date = :date, heure = :heure WHERE id_seance = :id');
        $query->bindValue(':id', $seance->getIdSeance(), PDO::PARAM_INT);
        $query->bindValue(':ref_film', $seance->getRefFilm(), PDO::PARAM_INT);
        $query->bindValue(':salle', $seance->getSalle(), PDO::PARAM_STR);
        $query->bindValue(':place_dispo', $seance->getPlaceDispo(), PDO::PARAM_INT);
        $query->bindValue(':date', $seance->getDate(), PDO::PARAM_STR);
        $query->bindValue(':heure', $seance->getHeure(), PDO::PARAM_STR);
        return $query->execute();
    }

    public function delete(int $id): bool
    {
        $query = $this->db->prepare('DELETE FROM seances WHERE id_seance = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        return $query->execute();
    }
}
?>