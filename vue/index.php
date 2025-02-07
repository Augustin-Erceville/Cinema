<?php include ("header.php")?>
<section id="films" class="py-5">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Films à l'Affiche</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+1" class="card-img-top" alt="Film 1">
                    <div class="card-body">
                        <h5 class="card-title">Film 1</h5>
                        <p class="card-text">Une aventure palpitante qui vous tiendra en haleine.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+2" class="card-img-top" alt="Film 2">
                    <div class="card-body">
                        <h5 class="card-title">Film 2</h5>
                        <p class="card-text">Une comédie romantique à ne pas manquer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+3" class="card-img-top" alt="Film 3">
                    <div class="card-body">
                        <h5 class="card-title">Film 3</h5>
                        <p class="card-text">Un thriller captivant qui vous surprendra.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="https://via.placeholder.com/300x400?text=Film+4" class="card-img-top" alt="Film 4">
                    <div class="card-body">
                        <h5 class="card-title">Film 4</h5>
                        <p class="card-text">Un drame poignant qui ne laissera personne indifférent.</p>
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
                    <td>1</td>
                    <td>Avatar: La Voie de l'eau</td>
                    <td>2025-02-10</td>
                    <td>20:00</td>
                    <td>Salle 1</td>
                    <td>3h12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Spider-Man: No Way Home</td>
                    <td>2025-02-11</td>
                    <td>18:00</td>
                    <td>Salle 2</td>
                    <td>2h28</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Inception</td>
                    <td>2025-02-12</td>
                    <td>22:00</td>
                    <td>Salle 3</td>
                    <td>2h42</td>
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
