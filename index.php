<?php include('./vue/header.php') ?>
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
            <a href="src/repository/catalogue.php" class="btn btn-primary">Voir le catalogue complet</a>
        </div>
    </div>
</section>
<section id="planning" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Planning des Séances</h2>
        <div class="text-center">
            <img src="https://via.placeholder.com/1200x400?text=Planning+des+Séances" class="img-fluid rounded" alt="Planning">
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Voir le planning</a>
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
<?php include('./vue/footer.php') ?>