<?php include ("header.php") ?>

<section id="films" class="py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Films à l'Affiche</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://fr.web.img5.acsta.net/c_310_420/pictures/23/02/10/10/56/3228985.jpg" class="card-img-top" alt="Film 1">
                    <div class="card-body">
                        <h5 class="card-title">Creed III</h5>
                        <p class="card-text">Adonis Creed affronte Damian, un ancien ami devenu rival, dans un combat pour l'honneur et la rédemption. Un affrontement explosif entre passé et présent.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="catalogue.php" class="btn btn-primary">Voir le catalogue complet</a>
        </div>
    </div>
</section>

<section id="planning" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Planning des Séances</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Film</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Salle</th>
                    <th>Durée</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td colspan="6" class="text-center">Les données seront ajoutées ici manuellement ou via une autre source.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="planning.php" class="btn btn-primary">Voir plus de détails</a>
        </div>
    </div>
</section>

<section id="reservation" class="py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Réservez vos Places</h2>
        <div class="text-center">
            <img src="https://via.placeholder.com/1200x400?text=Réservez+votre+place" class="img-fluid rounded" alt="Réservation">
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">Réserver maintenant</a>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
