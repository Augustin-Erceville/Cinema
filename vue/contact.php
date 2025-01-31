
<!DOCTYPE html>
<?php include('../src/bdd/Config.php');?>
<html>
<head>
    <title>Voir un Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<h1 class="text-center" style="text-transform: uppercase">
    DugnyCiné
</h1>
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../index.php">Acceuil</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Nouveautées</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../index.php#films">Film à l'affiche</a></li>
            <li><a class="dropdown-item" href="../index.php#planning">Planning des scéances</a></li>
            <li><a class="dropdown-item" href="../index.php#reservation">Reserver ses places</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="about.php">A Propos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Mon Compte</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
            <li><a class="dropdown-item" href="connexion.php">Connexion</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Administration</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="gestion_film.php">Gestion des films</a></li>
            <li><a class="dropdown-item" href="gestion_seance.php">Gestion des séances</a></li>
        </ul>
    </li>
</ul>

<h1> Formulaire - Poser une question ou signaler un problème </h1>

<form action="" method="POST">
    <label for="name"> Votre nom :</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email"> Votre email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="subject"> Sujet :</label><br>
    <select id="subject" name="subject" required>
        <option value="question">Poser une question</option>
        <option value="problem">Signaler un problème</option>
    </select><br><br>

    <label for="message">Message :</label><br>
    <textarea id="message" name="message" rows="5" required></textarea><br><br>

    <button type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupération des données du formulaire

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    echo "<h2>Votre message a été envoyé avec succès !</h2>";
    echo "<p><strong>Nom :</strong> $name</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Sujet :</strong> $subject</p>";
    echo "<p><strong>Message :</strong> $message</p>";

}
?>

</body>
</html>
