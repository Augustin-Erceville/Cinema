<?php
class Users{
    private $id_user;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $role;
    private $telephone
    private $naissance;
    public function __construct(array $donnees){
        $this->hydrate($donnees);
    }
    public function hydrate(array $donnees){
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }/**
 * @return mixed
 */
public function getIdUser()
{
    return $this->id_user;
}/**
 * @param mixed $id_user
 */
public function setIdUser($id_user)
{
    $this->id_user = $id_user;
}/**
 * @return mixed
 */
public function getNom()
{
    return $this->nom;
}/**
 * @param mixed $nom
 */
public function setNom($nom)
{
    $this->nom = $nom;
}/**
 * @return mixed
 */
public function getPrenom()
{
    return $this->prenom;
}/**
 * @param mixed $prenom
 */
public function setPrenom($prenom)
{
    $this->prenom = $prenom;
}/**
 * @return mixed
 */
public function getEmail()
{
    return $this->email;
}/**
 * @param mixed $email
 */
public function setEmail($email)
{
    $this->email = $email;
}/**
 * @return mixed
 */
public function getPassword()
{
    return $this->password;
}/**
 * @param mixed $password
 */
public function setPassword($password)
{
    $this->password = $password;
}/**
 * @return mixed
 */
public function getRole()
{
    return $this->role;
}/**
 * @param mixed $role
 */
public function setRole($role)
{
    $this->role = $role;
}/**
 * @return mixed
 */
public function getTelephone()
{
    return $this->telephone;
}/**
 * @param mixed $telephone
 */
public function setTelephone($telephone)
{
    $this->telephone = $telephone;
}/**
 * @return mixed
 */
public function getNaissance()
{
    return $this->naissance;
}/**
 * @param mixed $naissance
 */
public function setNaissance($naissance)
{
    $this->naissance = $naissance;
}

}
?>