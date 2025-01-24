<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire - Questions ou Problèmes</title>
</head>
<body>

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
