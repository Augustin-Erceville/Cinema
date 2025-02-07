<?php
include ("header.php");
require_once "../src/modele/Films.php";
require_once "../src/repository/FilmsRepository.php";
$filmRepository = new FilmsRepository();
$films = $filmRepository->getFilmsObj();

?>

<div class="row">
    <h1>Catalogue des Films </h1>
    <?php
    /** @var Films $film */
    foreach ($films as $film){ ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?=$film->getAffiche() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$film->getTitre() ?></h5>
                    <p class="card-text"><?=$film->getDescription() ?></p>
                    <a href="#" class="btn btn-primary">Afficher les séances</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php include('footer.php') ?>