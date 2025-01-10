<?php
namespace Src\Entites;


use PDO;

class User{

private $id;
private $nom;
private $prenom;
private $email;
private $password;
private Role $role;
private  $db;





public function setNom($name){
    $this->nom=$name;
}

public function setPrenom($prenom){
    $this->prenom=$prenom;
}

public function setEmail($email){
    $this->email=$email;
}

public function setPassword($password){
    $this->password=$password;
}

public function setRole(  Role $role){
    $this->role->findByid($role);
}

public function getRole(){
   return $this->role;
}


public function save(){

$query='insert into Users (nom,prenom,email,password,role_id) values (:nom,:prenom,:email,:password,:role)';
$con = ParentEntity::getConnexion();
$stmt=$con->prepare($query);
$stmt->bindParam(':nom',$this->nom);
$stmt->bindParam(':prenom',$this->prenom);
$stmt->bindParam(':email',$this->email);
$stmt->bindParam(':password',$this->password);
$stmt->bindParam(':role',$this->role->getId());
$stmt->execute();



}

public function checkEmail($email){
    $sql='select * from Users where email = :email';
    $con = ParentEntity::getConnexion();
    $stmt=$con->prepare($sql);
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}





}










?>