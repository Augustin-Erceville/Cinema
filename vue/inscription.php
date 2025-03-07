<?php include("header.php") ?>

<div class="container mt-3">
     <h1>Inscription</h1>
     <?php if (isset($_SESSION["erreur"])) : ?>
          <div class="alert alert-danger"><?= htmlspecialchars($_SESSION["erreur"]) ?></div>
          <?php unset($_SESSION["erreur"]); ?>
     <?php endif; ?>

     <form action="../src/traitement/inscription.php" method="post">
          <div class="mb-3">
               <label for="prenom" class="form-label">Prénom</label><br>
               <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom" value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>" required aria-label="Prénom"/>
          </div>

          <div class="mb-3">
               <label for="nom" class="form-label">Nom de famille</label>
               <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom de famille" value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>" required aria-label="Nom"/>
          </div>

          <div class="mb-3">
               <label for="naissance">Date de naissance</label>
               <input type="date" name="naissance" class="form-control" id="naissance" value="<?= htmlspecialchars($_POST['naissance'] ?? '') ?>" required/>
          </div>

          <div class="mb-3">
               <label for="telephone">Numéro de téléphone</label>
               <input type="tel" name="telephone" class="form-control" id="telephone" placeholder="Votre numéro de téléphone" value="<?= htmlspecialchars($_POST['telephone'] ?? '') ?>" required pattern="^\+?(\d{1,3})?[\s.-]?\(?\d{1,4}?\)?[\s.-]?\d{1,4}[\s.-]?\d{1,4}$"/>
          </div>

          <div class="mb-3">
               <label for="email" class="form-label">Email address</label>
               <input type="email" name="email" class="form-control" id="email" placeholder="adresse@email.com" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" aria-label="Email"/>
          </div>

          <div class="mb-3">
               <label for="password" class="form-label">Password</label>
               <input type="password" name="password" class="form-control" id="password" placeholder="Votremotdepasse" required aria-label="Mot de passe"/>
          </div>

          <div class="d-grid gap-2">
               <input type="submit" class="btn btn-outline-success" name="envoyer" id="envoyer" value="S'inscrire"/>
          </div>
     </form>

     <p>
          Déjà un compte ? <a href="connexion.php">Se connecter</a>
     </p>
</div>

<?php include('footer.php') ?>
