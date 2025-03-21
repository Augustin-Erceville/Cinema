<?php include("header.php") ?>

<section id="films" class="py-5 border border-light rounded shadow">
    <div class="container">
        <h2 class="text-center mb-4 py-2 rounded border shadow-sm">Films à l'Affiche</h2>
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
            <div class="col-md-3">
                <div class="card">
                    <img src="https://fr.web.img3.acsta.net/c_310_420/pictures/22/02/16/17/42/3125788.jpg" class="card-img-top" alt="Film 2">
                    <div class="card-body">
                        <h5 class="card-title">The Batman</h5>
                        <p class="card-text">Batman traque un tueur en série qui dévoile les secrets sombres de Gotham. Une lutte intense entre justice et corruption.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://fr.web.img3.acsta.net/c_310_420/pictures/23/03/20/14/57/4979368.jpg" class="card-img-top" alt="Film 3">
                    <div class="card-body">
                        <h5 class="card-title">Super Mario Bros</h5>
                        <p class="card-text">Mario et Luigi partent à l’aventure pour sauver la princesse Peach et le royaume des champignons. Une quête épique pleine de surprises et de dangers !</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://fr.web.img3.acsta.net/c_310_420/pictures/23/05/10/10/55/5129031.jpg" class="card-img-top" alt="Film 4">
                    <div class="card-body">
                        <h5 class="card-title">Fast and Furious X</h5>
                        <p class="card-text">Dom Toretto et sa famille affrontent une nouvelle menace mondiale. Une course folle pour protéger ceux qu’ils aiment, à pleine vitesse !</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="catalogue.php" class="btn btn-light text-dark border shadow">Voir le catalogue complet</a>
        </div>
    </div>
</section>

<section id="planning" class="py-5 bg-light border rounded shadow">
    <div class="container">
        <h2 class="text-center mb-4 py-2 rounded border shadow-sm">Planning des Séances</h2>
        <div class="table-responsive border rounded">
            <table class="table table-light table-bordered table-hover">
                <thead class="table-primary text-dark border border-light">
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
                <tr class="border">
                    <td colspan="6" class="text-center text-muted">Les données seront ajoutées ici manuellement ou via une autre source.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="planning.php" class="btn text-dark rder border-light shadow">Voir plus de détails</a>
        </div>
    </div>
</section>

<section id="reservation" class="py-5 border border-light rounded shadow">
    <div class="container">
        <h2 class="text-center mb-4 py-2 rounded border shadow-sm">Réservez vos Places</h2>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-light text-dark border shadow mb-5">Réserver maintenant</a>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
