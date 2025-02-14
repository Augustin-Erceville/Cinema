<?php include("header.php") ?>

<section id="films" class="py-5 bg-primary border border-light rounded shadow">
    <div class="container">
        <h2 class="text-center text-light bg-dark mb-4 py-2 rounded border border-light shadow-sm">🎬 Films à l'Affiche</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card bg-light text-dark border border-primary shadow">
                    <img src="https://fr.web.img5.acsta.net/c_310_420/pictures/23/02/10/10/56/3228985.jpg" class="card-img-top border-bottom border-primary rounded-top" alt="Film 1">
                    <div class="card-body bg-primary text-light rounded-bottom">
                        <h5 class="card-title">Creed III</h5>
                        <p class="card-text">Adonis Creed affronte Damian, un ancien ami devenu rival, dans un combat pour l'honneur et la rédemption. Un affrontement explosif entre passé et présent.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="catalogue.php" class="btn btn-light text-dark border border-primary shadow">📚 Voir le catalogue complet</a>
        </div>
    </div>
</section>

<section id="planning" class="py-5 bg-light border border-primary rounded shadow">
    <div class="container">
        <h2 class="text-center text-dark bg-primary mb-4 py-2 rounded border border-light shadow-sm">🗓️ Planning des Séances</h2>
        <div class="table-responsive border border-primary rounded">
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
                <tr class="border border-primary">
                    <td colspan="6" class="text-center text-muted">Les données seront ajoutées ici manuellement ou via une autre source.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="planning.php" class="btn btn-primary text-light border border-light shadow">🔎 Voir plus de détails</a>
        </div>
    </div>
</section>

<section id="reservation" class="py-5 bg-primary border border-light rounded shadow">
    <div class="container">
        <h2 class="text-center text-light bg-dark mb-4 py-2 rounded border border-primary shadow-sm">🎟️ Réservez vos Places</h2>
        <div class="text-center">
            <img src="https://via.placeholder.com/1200x400?text=Réservez+votre+place" class="img-fluid rounded border border-primary shadow-lg" alt="Réservation">
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-light text-dark border border-primary shadow">✅ Réserver maintenant</a>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
