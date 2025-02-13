<?php
include('header.php');
$stmt = $bdd->prepare("DELETE FROM reports WHERE id_report = ?");
$stmt->execute([$_GET['id']]);
header("Location: report.php");

exit;
include('footer.php')
?>
