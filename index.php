<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Dugny au Ciné</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header class="bg-dark text-white text-center py-5" style="background: url('https://via.placeholder.com/1920x600?text=Bienvenue+au+Cinéma') no-repeat center center / cover;">
    <div class="container">
        <h1 class="display-4">Bienvenue à Dugny au Ciné 🎬</h1>
        <p class="lead">Découvrez les dernières sorties et réservez votre place dès maintenant !</p>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">Dugny au Ciné</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#films">Films à l'affiche</a></li>
                <li class="nav-item"><a class="nav-link" href="#planning">Planning des séances</a></li>
                <li class="nav-item"><a class="nav-link" href="#reservation">Réserver</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <!-- Bouton Connexion -->
                <li class="nav-item"><a class="nav-link btn btn-outline-light btn-sm ms-2" href="connexion.php">Connexion</a></li>
            </ul>
        </div>
    </div>
</nav>
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
            <a href="#" class="btn btn-primary">Voir le catalogue complet</a>
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
<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 Dugny au Ciné. Tous droits réservés. | <a href="#" class="text-warning">Mentions légales</a></p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
