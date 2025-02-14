<?php

class UsersRepository
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Config();
    }

    public function inscription(Users $user)
    {

        $req = $this->bdd->connexion()->prepare('INSERT INTO users (prenom, nom, telephone, email, password, naissance, role) VALUES (:prenom, :nom, :telephone, :email, :password, :naissance, :role)');
        $success = $req->execute([
            'prenom' => $user->getPrenom(),
            'nom' => $user->getNom(),
            'telephone' => $user->getTelephone(),
            'email' => $user->getEmail(),
            'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT),
            'naissance' => $user->getNaissance(),
            'role' => $user->getRole()
        ]);
        return $success;
    }

    public function connexion(Users $user){
        $req = $this->bdd->connexion()->prepare('SELECT * FROM users WHERE email = :email');
        $req->execute([
            'email' => $user->getEmail()
        ]);
        $res = $req->fetch();
        if($res && password_verify($user->getPassword(), $res['password'])){
            $user->setRole($res['role']);
            $user->setPrenom($res['prenom']);
            $user->setTelephone($res['telephone']);
            $user->setEmail($res['email']);
            $user->setNaissance($res['naissance']);
            $user->setIdUser($res['id_user']);
        }
        return $user;
    }

    public function getAllUsers()
    {
        $users = [];
        $req = $this->bdd->connexion()->prepare('SELECT * FROM users ');
        $req->execute();
        $res = $req->fetchAll();
        foreach ($res as $user) {
            $users[] = new Users([
                'idUser' => $user["id_user"],
                'prenom' => $user["prenom"],
                'nom' => $user["nom"],
                'naissance' => $user["naissance"],
                'telephone' => $user["telephone"],
                'email' => $user["email"],
                'password' => $user["password"],
                'role' => $user["role"]
            ]);
        }
        return $users;
    }
}