<?php include("header.php") ?>

<section id="films" class="py-5 bg-dark border border-secondary rounded shadow">
    <div class="container">
        <h2 class="text-center text-warning bg-secondary mb-4 py-2 rounded border border-dark shadow-sm">🎬 Films à l'Affiche</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card bg-secondary text-light border border-dark shadow">
                    <img src="https://fr.web.img5.acsta.net/c_310_420/pictures/23/02/10/10/56/3228985.jpg" class="card-img-top border-bottom border-warning rounded-top" alt="Film 1">
                    <div class="card-body bg-dark text-warning rounded-bottom">
                        <h5 class="card-title">Creed III</h5>
                        <p class="card-text">Adonis Creed affronte Damian, un ancien ami devenu rival, dans un combat pour l'honneur et la rédemption. Un affrontement explosif entre passé et présent.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="catalogue.php" class="btn btn-warning text-dark border border-dark shadow">📚 Voir le catalogue complet</a>
        </div>
    </div>
</section>

<section id="planning" class="py-5 bg-secondary border border-dark rounded shadow">
    <div class="container">
        <h2 class="text-center text-light bg-dark mb-4 py-2 rounded border border-secondary shadow-sm">🗓️ Planning des Séances</h2>
        <div class="table-responsive border border-warning rounded">
            <table class="table table-dark table-bordered table-hover">
                <thead class="table-warning text-dark border border-dark">
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
                <tr class="border border-secondary">
                    <td colspan="6" class="text-center text-muted">Les données seront ajoutées ici manuellement ou via une autre source.</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="planning.php" class="btn btn-dark text-warning border border-secondary shadow">🔎 Voir plus de détails</a>
        </div>
    </div>
</section>

<section id="reservation" class="py-5 bg-dark border border-secondary rounded shadow">
    <div class="container">
        <h2 class="text-center text-warning bg-secondary mb-4 py-2 rounded border border-dark shadow-sm">🎟️ Réservez vos Places</h2>
        <div class="text-center">
            <img src="https://via.placeholder.com/1200x400?text=Réservez+votre+place" class="img-fluid rounded border border-warning shadow-lg" alt="Réservation">
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-warning text-dark border border-dark shadow">✅ Réserver maintenant</a>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
