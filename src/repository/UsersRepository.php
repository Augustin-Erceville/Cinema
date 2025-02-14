<?php
require_once "../src/modele/Users.php";

class UsersRepository {
    private $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function getUsers() {
        $query = $this->bdd->prepare("SELECT * FROM users");
        $query->execute();
        $users = [];

        while ($data = $query->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new Users($data);
        }
        return $users;
    }

    public function getUserById($id) {
        $query = $this->bdd->prepare("SELECT * FROM users WHERE id_user = :id");
        $query->execute(['id' => $id]);
        $data = $query->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return new Users($data);
        }
        return null;
    }

    public function inscription(Users $user) {
        $checkReq = $this->bdd->prepare('SELECT id_user FROM users WHERE email = :email');
        $checkReq->execute(['email' => $user->getEmail()]);

        if ($checkReq->fetch()) {
            return false; // L'utilisateur existe déjà
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
            'password'  => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'naissance' => $user->getNaissance(),
            'role'      => $user->getRole()
        ]);
    }

    public function connexion($email, $password) {
        $req = $this->bdd->prepare('SELECT * FROM users WHERE email = :email');
        $req->execute(['email' => $email]);
        $res = $req->fetch();

        if ($res && password_verify($password, $res['password'])) {
            return new Users($res);
        }
        return null;
    }

    public function updateUser(Users $user) {
        $req = $this->bdd->prepare(
            'UPDATE users 
             SET prenom = :prenom, nom = :nom, telephone = :telephone, 
                 email = :email, naissance = :naissance, role = :role 
             WHERE id_user = :id_user'
        );

        return $req->execute([
            'id_user'   => $user->getIdUser(),
            'prenom'    => $user->getPrenom(),
            'nom'       => $user->getNom(),
            'telephone' => $user->getTelephone(),
            'email'     => $user->getEmail(),
            'naissance' => $user->getNaissance(),
            'role'      => $user->getRole()
        ]);
    }

    public function deleteUser($id) {
        $req = $this->bdd->prepare('DELETE FROM users WHERE id_user = :id');
        return $req->execute(['id' => $id]);
    }
}
?>
