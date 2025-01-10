<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Dugny au Ciné</title>
    <style>
        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: #f4f4f9;
            color: #333;
        }

        header {
            background: url('https://via.placeholder.com/1920x600?text=Bienvenue+au+Cinéma') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        header p {
            font-size: 1.5em;
            margin-top: 20px;
        }

        nav {
            background: #444;
            display: flex;
            justify-content: center;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-size: 1.1em;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #FFD700;
        }

        section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: auto;
            margin-bottom: 20px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        section h2 {
            font-size: 2.5em;
            color: #007BFF;
            text-align: center;
            margin-bottom: 40px;
        }

        .film-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            gap: 20px;
        }

        .film-card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background: #f9f9f9;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .film-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .film-card img {
            width: 100%;
            height: auto;
        }

        .film-card h3 {
            margin: 15px;
            font-size: 1.5em;
            color: #007BFF;
        }

        .film-card p {
            margin: 0 15px 15px;
            font-size: 1em;
            color: #555;
        }

        .section-image {
            text-align: center;
        }

        .section-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .button {
            display: inline-block;
            padding: 12px 25px;
            margin: 20px 0;
            background: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1em;
            transition: background 0.3s ease;
        }

        .button:hover {
            background: #0056b3;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #333;
            color: #fff;
            font-size: 1em;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #FFD700;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenue sur Dugny au Ciné 🎬</h1>
    <p>Découvrez les dernières sorties et réservez votre place dès maintenant !</p>
</header>

<nav>
    <a href="#films">Films à l'affiche</a>
    <a href="#planning">Planning des séances</a>
    <a href="#reservation">Réserver</a>
    <a href="#about">À propos</a>
    <a href="#contact">Contact</a>
</nav>

<section id="films">
    <h2>Films à l'Affiche</h2>
    <div class="film-container">
        <div class="film-card">
            <img src="https://via.placeholder.com/300x400?text=Film+1" alt="Affiche du Film 1">
            <h3>Film 1</h3>
            <p>Une aventure palpitante qui vous tiendra en haleine.</p>
        </div>
        <div class="film-card">
            <img src="https://via.placeholder.com/300x400?text=Film+2" alt="Affiche du Film 2">
            <h3>Film 2</h3>
            <p>Une comédie romantique à ne pas manquer.</p>
        </div>
        <div class="film-card">
            <img src="https://via.placeholder.com/300x400?text=Film+3" alt="Affiche du Film 3">
            <h3>Film 3</h3>
            <p>Un thriller captivant qui vous surprendra.</p>
        </div>
        <div class="film-card">
            <img src="https://via.placeholder.com/300x400?text=Film+4" alt="Affiche du Film 4">
            <h3>Film 4</h3>
            <p>Un drame poignant qui ne laissera personne indifférent.</p>
        </div>
    </div>
    <a href="#" class="button">Voir le catalogue complet</a>
</section>

<section id="planning">
    <h2>Planning des Séances</h2>
    <div class="section-image">
        <img src="https://via.placeholder.com/1200x400?text=Planning+des+Séances" alt="Planning">
    </div>
    <a href="#" class="button">Voir le planning</a>
</section>

<section id="reservation">
    <h2>Réservez vos Places</h2>
    <div class="section-image">
        <img src="https://via.placeholder.com/1200x400?text=Réservez+votre+place" alt="Réservation">
    </div>
    <a href="#" class="button">Réserver maintenant</a>
</section>

<footer>
    <p>&copy; 2025 Dugny au Ciné. Tous droits réservés. | <a href="#">Mentions légales</a></p>
</footer>

</body>
</html>
