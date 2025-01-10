<?php

namespace src\entites;
use PDO;
class Category
{
    private $id;
    private $categorie;


    public function __construct()
    {
    }
    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCategorie()
    {
        return $this->categorie;
    }


    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
    //  public function setAttrubie($categorie){
    //     $this->categorie=$categorie;

    //  }

    public function addCategorie()
    {
        $query = "INSERT INTO  categorie (nom) VALUES (:nom)";
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        $stmt->bindparam(':nom', $this->categorie);
        return $stmt->execute();
    }
    public function updateCategorie()
    {
        $query = 'UPDATE categorie SET nom = :nom WHERE id = :id';
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nom', $this->categorie);
        return $stmt->execute();
    }

    public function deleteCategorie(){
        $query = 'Delete from categorie  where id=:id';
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }

    public function getAllCategories(){
        $query = 'select * from categorie';
        $con = ParentEntity::getConnexion();
        $stmt = $con->query($query);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCategoryById(){
        $query = 'select * from categorie';
        $con = ParentEntity::getConnexion();
        $stmt = $con->query($query);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



}

?>