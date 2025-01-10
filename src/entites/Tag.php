<?php

namespace Src\Entites;
use PDO;
use PDOException;
class Tag
{
    private $id;
    private $tag; 
    private $livres = []; 
    private $connection;

   
    public function __construct(){}


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

   
    public function getTag()
    {
        return $this->tag;
    }


    public function setTag($tag)
    {
        $this->tag = $tag;
    }

   
    public function getLivres()
    {
        return $this->livres;
    }

    public function addLivre($livre)
    {
        $this->livres[] = $livre;
    }

    public function getAllTag(){
        $query = 'select * from tag';
        $con = ParentEntity::getConnexion();
        $stmt = $con->query($query);

        return $stmt->fetchObject(__CLASS__);
    }
    public function updateTag()
    {
        $query = "UPDATE tag SET tag = :tag WHERE id = :id";
        $con = ParentEntity::getConnexion();
        $stmt =$con->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':tag', $this->tag);
        return $stmt->execute(); 
    }
  
    public function supprimerTag($id){
        $query='delete from Tag where id=: id';
        $con = ParentEntity::getConnexion();
        $stmt=$con->prepare($query);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
        
        
        }
}

?>
