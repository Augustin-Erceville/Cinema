<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning des Séances</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-warning">
    <div class="container-fluid">
        <a class="navbar-brand text-warning" href="#">Cinéma</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" href="planning.php">Planning des Séances</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 border border-primary rounded p-4">
    <h1 class="text-center text-light bg-primary p-3 rounded border border-light">Planning des Séances</h1>
    <div class="table-responsive border border-success rounded">
        <table class="table table-bordered table-hover">
            <thead class="table-success border border-dark">
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
            <tr class="border border-info">
                <td>1</td>
                <td>Avatar: La Voie de l'eau</td>
                <td>2025-02-10</td>
                <td>20:00</td>
                <td>Salle 1</td>
                <td>3h12</td>
            </tr>
            <tr class="border border-warning">
                <td>2</td>
                <td>Spider-Man: No Way Home</td>
                <td>2025-02-11</td>
                <td>18:00</td>
                <td>Salle 2</td>
                <td>2h28</td>
            </tr>
            <tr class="border border-danger">
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
</div>

<div class="container mt-5 border border-info rounded p-4">
    <div class="alert alert-success text-center border border-warning" role="alert">
        Consultez régulièrement cette page pour connaître les mises à jour des séances.
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
