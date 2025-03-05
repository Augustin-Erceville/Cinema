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
                 'password'  => $user->getPassword(),
                 'naissance' => $user->getNaissance(),
                 'role'      => $user->getRole()
            ]);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function connexion(string $email, string $password): ?Users {
        try {
            $req = $this->bdd->prepare('SELECT * FROM users WHERE email = :email');
            $req->execute(['email' => $email]);
            $res = $req->fetch(PDO::FETCH_ASSOC);

            if ($res && password_verify($password, $res['password'])) {
                return new Users($res);
            }
            return null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function updateUser(Users $user): bool {
        try {
            $req = $this->bdd->prepare(
                 'INSERT INTO users (prenom, nom, telephone, email, password, naissance, role) 
     VALUES (:prenom, :nom, :telephone, :email, :password, :naissance, :role)'
            );

            if (!$req->execute([
                 'prenom'    => $user->getPrenom(),
                 'nom'       => $user->getNom(),
                 'telephone' => $user->getTelephone(),
                 'email'     => $user->getEmail(),
                 'password'  => $user->getPassword(),
                 'naissance' => $user->getNaissance(),
                 'role'      => $user->getRole()
            ])) {
                var_dump($req->errorInfo());
                return false;
            }
            return true;
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