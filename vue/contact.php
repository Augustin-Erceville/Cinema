<?php include ("header.php")?>

<div class="container my-5 p-4 rounded shadow bg-white">
    <h1 class="text-center text-primary mb-4">Formulaire - Poser une question ou signaler un problème</h1>

    <form action="" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="name" class="form-label">Votre nom :</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Entrez votre nom" required>
            <div class="invalid-feedback">Veuillez entrer votre nom.</div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Votre email :</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre email" required>
            <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Sujet :</label>
            <select id="subject" name="subject" class="form-select" required>
                <option value="" disabled selected>Choisissez une option</option>
                <option value="question">Poser une question</option>
                <option value="problem">Signaler un problème</option>
            </select>
            <div class="invalid-feedback">Veuillez sélectionner un sujet.</div>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message :</label>
            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Entrez votre message" maxlength="300" required></textarea>
            <div class="form-text text-end"><span id="charCount">300</span> caractères restants</div>
            <div class="invalid-feedback">Veuillez écrire un message (max 300 caractères).</div>
        </div>

        <button type="submit" class="btn btn-primary w-100">Envoyer</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);

        echo "<div class='alert alert-success mt-4'>";
        echo "<h2 class='text-success'>Votre message a été envoyé avec succès !</h2>";
        echo "<p><strong>Nom :</strong> $name</p>";
        echo "<p><strong>Email :</strong> $email</p>";
        echo "<p><strong>Sujet :</strong> $subject</p>";
        echo "<p><strong>Message :</strong> $message</p>";
        echo "</div>";
    }
    ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const messageField = document.getElementById('message');
    const charCount = document.getElementById('charCount');

    messageField.addEventListener('input', () => {
        const remaining = 300 - messageField.value.length;
        charCount.textContent = remaining;
    });
</script>

<?php include('footer.php') ?>
