<?php
include("header.php");
?>
<?php

if (empty($_SESSION['csrf_token'])) {
     $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

     <div class="container mt-3">
          <h1 class="mb-4">Connexion</h1>

          <?php if (isset($_SESSION["error_message"])) : ?>
               <div class="alert alert-danger"><?= htmlspecialchars($_SESSION["error_message"]) ?></div>
               <?php unset($_SESSION["error_message"]);?>
          <?php endif; ?>

          <form action="../src/traitement/connexion.php" method="post">
               <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

               <div class="mb-3">
                    <label for="email" class="form-label">Adresse mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
               </div>
               <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" required>
               </div>
               <button type="submit" name="envoyer" class="btn btn-primary">Se connecter</button>
          </form>

          <p>Pas encore de compte ? <a href="inscription.php">S'inscrire</a></p>
     </div>
<?php include("footer.php"); ?>