<?php
include ('header.php');
require_once "../src/modele/Reports.php";
require_once "../src/repository/ReportsRepository.php";
$reportsRepository = new ReportsRepository();
$reports = $reportsRepository->getReports();
$reports = $reportsRepository->getReportsObj();
?>
<div class="container py-5">
    <h1>Gestion des Reports</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Sujet</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($reports)){ ?>

            <?php
            /** @var Films $reports */
            foreach ($reports as $report){ ?>
                <tr>
                    <td><?= htmlspecialchars($report->getIdReports()) ?></td>
                    <td><?= htmlspecialchars($report->getName()) ?></td>
                    <td><?= htmlspecialchars($report->getSubject()) ?></td>
                    <td><?= htmlspecialchars($report->getMessage()) ?></td>
                    <td>
                        <a href="report_read.php?id=<?= $report->getIdReports() ?>" class="btn btn-info btn-sm">👁️</a>
                        <a href="report_delete.php?id=<?= $report->getIdReports() ?>" class="btn btn-danger btn-sm">🗑️</a>
                    </td>
                </tr>
            <?php } ?>
        <?php }else{ ?>
            <tr>
                <td colspan="6" class="text-center">Aucun report trouvé.</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?php include('footer.php') ?>
