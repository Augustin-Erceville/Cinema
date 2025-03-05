<?php
class Users {
     private ?int $id_user = null;
     private ?string $nom = null;
     private ?string $prenom = null;
     private ?string $email = null;
     private ?string $password = null;
     private ?string $role = null;
     private ?string $telephone = null;
     private ?string $naissance = null;

     public function __construct(array $donnees = []) {
          $this->hydrate($donnees);
     }

     private function hydrate(array $donnees): void {
          foreach ($donnees as $key => $value) {
               $method = 'set' . ucfirst($key);
               if (method_exists($this, $method)) {
                    $this->$method($value);
               }
          }
     }

     public function getIdUser(): ?int {
          return $this->id_user;
     }

     public function setIdUser(?int $id_user): void {
          $this->id_user = $id_user;
     }

     public function getNom(): ?string {
          return $this->nom;
     }

     public function setNom(?string $nom): void {
          $this->nom = trim($nom);
     }

     public function getPrenom(): ?string {
          return $this->prenom;
     }

     public function setPrenom(?string $prenom): void {
          $this->prenom = trim($prenom);
     }

     public function getEmail(): ?string {
          return $this->email;
     }

     public function setEmail(?string $email): void {
          if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $this->email = trim($email);
          } else {
               throw new InvalidArgumentException("Email invalide");
          }
     }

     public function getPassword(): ?string {
          return $this->password;
     }

     public function setPassword(?string $password): void {
          if (!empty($password) && !password_get_info($password)['algoName']) {
               $this->password = password_hash($password, PASSWORD_BCRYPT);
          } else {
               $this->password = $password;
          }
     }

     public function getRole(): ?string {
          return $this->role;
     }

     public function setRole(?string $role): void {
          $this->role = trim($role);
     }

     public function getTelephone(): ?string {
          return $this->telephone;
     }

     public function setTelephone(?string $telephone): void {
          $this->telephone = trim($telephone);
     }

     public function getNaissance(): ?string {
          return $this->naissance;
     }

     public function setNaissance(?string $naissance): void {
          $this->naissance = trim($naissance);
     }
}
?>
