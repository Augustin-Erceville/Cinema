<?php
include 'header.php'
require_once "../src/bdd/Config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ref_film = $_POST['ref_film'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $salle = $_POST['salle'];
    $place_dispo = $_POST['place_dispo'];


    $query = "INSERT INTO seances (ref_film, date, heure, salle, place_dispo) 
              VALUES (:ref_film, :date, :heure, :salle, :place_dispo)";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':ref_film', $ref_film);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':heure', $heure);
    $stmt->bindParam(':salle', $salle);
    $stmt->bindParam(':place_dispo', $place_dispo);

    if ($stmt->execute()) {
        echo "<h3>La séance a été ajoutée avec succès !</h3>";
    } else {
        echo "<h3>Une erreur s'est produite lors de l'ajout de la séance.</h3>";
    }
}
?>


<h1>Ajouter une séance de cinéma</h1>
<form method="POST">
    <label for="ref_film">Référence du film (ID) :</label>
    <input type="number" id="ref_film" name="ref_film" required>

    <label for="date">Date de la séance :</label>
    <input type="date" id="date" name="date" required>

    <label for="heure">Heure de la séance :</label>
    <input type="datetime-local" id="heure" name="heure" required>

    <label for="salle">Salle :</label>
    <input type="text" id="salle" name="salle" required>

    <label for="place_dispo">Nombre de places disponibles :</label>
    <input type="number" id="place_dispo" name="place_dispo" min="1" required>

    <button type="submit">Ajouter la séance</button>
</form>
<?php include 'footer.php'?>