<?php
include ('header.php');
require_once "../src/modele/Seances.php";
require_once "../src/repository/SeancesRepository.php";

$config = new Config();
$db = $config->connexion();

$seancesRepository = new SeancesRepository($db);
$seances = $seancesRepository->findAll();
?>

<div class="container py-5">
    <h1>Gestion des Séances</h1>
    <a href="seance_create.php" class="btn btn-success mb-3">➕</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Film</th>
            <th>Salle</th>
            <th>Places Disponibles</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($seances)){ ?>

            <?php
            foreach ($seances as $seance){ ?>
                <tr>
                    <td><?= htmlspecialchars($seance->getIdSeance()) ?></td>
                    <td><?= htmlspecialchars($seance->getRefFilm()) ?></td>
                    <td><?= htmlspecialchars($seance->getSalle()) ?></td>
                    <td><?= htmlspecialchars($seance->getPlaceDispo()) ?></td>
                    <td><?= htmlspecialchars($seance->getDate()) ?></td>
                    <td><?= htmlspecialchars($seance->getHeure()) ?></td>
                    <td>
                        <a href="voir_seance.php?id=<?= $seance->getIdSeance() ?>" class="btn btn-info btn-sm">👁️</a>
                        <a href="seance_update.php?id=<?= $seance->getIdSeance() ?>" class="btn btn-warning btn-sm">✏️</a>
                        <a href="seance_delete.php?id=<?= $seance->getIdSeance() ?>" class="btn btn-danger btn-sm">🗑️</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }else{ ?>
            <tr>
                <td colspan="7" class="text-center">Aucune séance trouvée.</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
