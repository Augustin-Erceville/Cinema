<?php include('header.php');
require_once "../src/modele/Reports.php";
require_once "../src/repository/ReportsRepository.php";
$ReportsRepository = new ReportsRepository();
$reports = $ReportsRepository->getReportById($_GET["id"]);
?>
    <div class="container py-5">
        <div class="row">
            <div class="col bg-info-subtle text-dark rounded shadow">
                <h1 class="text-center mt-5"><?= htmlspecialchars($reports->getSubject()) ?></h1>
                <p class="fs-5" style="text-align: justify"><?= htmlspecialchars($reports->getMessage()) ?></p>
                <h2>Utilisateur:</h2>
                <h4><span class="badge rounded-pill text-bg-primary">Email de l'utilisateurEm: <?= htmlspecialchars($reports->getEmail()) ?></span>
                    <span class="badge rounded-pill text-bg-danger">Nom de l'utilisateur : <?= htmlspecialchars($reports->getName()) ?></span>
                    <span class="badge rounded-pill text-bg-secondary">ID de contact: <?= htmlspecialchars($reports->getIdReport()) ?></span></h4>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>