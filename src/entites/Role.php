<?php
namespace src\Entites;
   

class Role{
    private $id;
    private $nom;


    public function __construct(){
    }

    public function getNom() {
        return $this->nom;
    }

    public function getId() {
        return $this->id;
    }

    public function getName(){
        return $this->nom;
    }

    public function setName($nom){
        $this->nom = $nom;
    }

    public function findByName($name) {
        $cnx = ParentEntity::getConnexion();

        $query = "SELECT * FROM role  WHERE nom = '" . $name . "'";

        $stmt = $cnx->prepare($query);

        $stmt->execute();

        return $stmt->fetchObject(__CLASS__); 
    }

    public function findById($id) {
        $cnx =ParentEntity::getConnexion();

        $query = "SELECT * FROM role WHERE id =" . $id;

        $stmt = $cnx->prepare($query);

        $stmt->execute();

        return $stmt->fetchObject(__CLASS__); 
    }
}