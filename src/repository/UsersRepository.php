<?php

class UsersRepository {
     private PDO $bdd;

     public function __construct(PDO $bdd) {
          $this->bdd = $bdd;
          $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
     public function getUsers(): array {
          try {
               $query = $this->bdd->prepare("SELECT * FROM users");
               $query->execute();
               $users = [];

               while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
                    $users[] = new Users($data);
               }
               return $users;
          } catch (PDOException $e) {
               return [];
          }
     }
     public function getUserById(int $id): ?Users {
          try {
               $query = $this->bdd->prepare("SELECT * FROM users WHERE id_user = :id");
               $query->execute(['id' => $id]);
               $data = $query->fetch(PDO::FETCH_ASSOC);

               return $data ? new Users($data) : null;
          } catch (PDOException $e) {
               return null;
          }
     }
     public function inscription(Users $user): bool {
          try {
               $checkReq = $this->bdd->prepare('SELECT id_user FROM users WHERE email = :email');
               $checkReq->execute(['email' => $user->getEmail()]);

               if ($checkReq->rowCount() > 0) {
                    return false;
               }

               $req = $this->bdd->prepare(
                    'INSERT INTO users (prenom, nom, telephone, email, password, naissance, role) 
                     VALUES (:prenom, :nom, :telephone, :email, :password, :naissance, :role)'
               );

               return $req->execute([
                    'prenom'    => $user->getPrenom(),
                    'nom'       => $user->getNom(),
                    'telephone' => $user->getTelephone(),
                    'email'     => $user->getEmail(),
                    'password'  => password_hash($user->getPassword(), PASSWORD_BCRYPT),
                    'naissance' => $user->getNaissance(),
                    'role'      => $user->getRole()
               ]);
          } catch (PDOException $e) {
               return false;
          }
     }
     public function connexion($email, $password): ?Users {
          try {
               $sql = "SELECT * FROM users WHERE email = :email";
               $stmt = $this->bdd->prepare($sql);
               $stmt->execute(['email' => $email]);
               $user = $stmt->fetch(PDO::FETCH_ASSOC);

               if ($user) {
               }

               return null;
          } catch (PDOException $e) {
               error_log("Erreur PDO : " . $e->getMessage());
               return null;
          }
     }

     public function updateUser(Users $user): bool {
          try {
               $req = $this->bdd->prepare(
                    'UPDATE users 
                     SET prenom = :prenom, nom = :nom, telephone = :telephone, 
                         email = :email, password = :password, naissance = :naissance, role = :role
                     WHERE id_user = :id_user'
               );

               return $req->execute([
                    'id_user'   => $user->getIdUser(),
                    'prenom'    => $user->getPrenom(),
                    'nom'       => $user->getNom(),
                    'telephone' => $user->getTelephone(),
                    'email'     => $user->getEmail(),
                    'password'  => password_hash($user->getPassword(), PASSWORD_BCRYPT),
                    'naissance' => $user->getNaissance(),
                    'role'      => $user->getRole()
               ]);
          } catch (PDOException $e) {
               return false;
          }
     }
     public function deleteUser(int $id): bool {
          try {
               $checkReq = $this->bdd->prepare('SELECT id_user FROM users WHERE id_user = :id');
               $checkReq->execute(['id' => $id]);

               if ($checkReq->rowCount() == 0) {
                    return false;
               }

               $req = $this->bdd->prepare('DELETE FROM users WHERE id_user = :id');
               return $req->execute(['id' => $id]);
          } catch (PDOException $e) {
               return false;
          }
     }
}
?>
