<?php
namespace src\entites;

use PDO;


class Livre {
    private $id;
    private $titre;
    private $autheur;
    private $tags = [];
    private Category $categorie;
    // refers to the accessibility
    
    public function __construct() {
      
    }

   
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAutheur() {
        return $this->autheur;
    }

    public function setAutheur($autheur) {
        $this->autheur = $autheur;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getTags() {
        return $this->tags;
    }

    public function setTags( $tags) {
        $this->tags= $tags;
    }

    public function getCategorie() {
        return $this->categorie;
    }

    public function setCategorie(  $categorie) {
        $this->categorie = $categorie;
    }

    
    public function AjouterLivre(){
        $query="INSERT INTO  Livre (titre,autheur,id_categorie) VALUES  ('" .$this->titre . "','" .$this->categorie->getId() . "');";
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        

        // if($stmt ->execute()){
        //     $bookId = $this->con->lastInsertId();
        //     foreach($tags as $tag){
        //         $stmt=$this->con->prepare;
        //     }
        }
          
        
    

    public function getAll(){
        $query = 'select * from livre';
        $con = ParentEntity::getConnexion();
        $stmt = $con->query($query);

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function updateLivre() {
        $query = 'UPDATE livre SET titre = :titre WHERE id = :id';
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':titre', $this->titre);
        return $stmt->execute();

       
    }

    public function deleteLivre() {
        $query = 'Delete from livre  where id=:id';
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
}
// public function __construct($id, $titre, $autheur, $tags, Categories $categorie) {

// $tag = new Tag
$cat = new categorie(1,"AAJDJCO");

$l = new tag(2,"hdsuy");
$lB = new tag(3,"AZERTYUIO");

$lA = new tag(4,"AZRZ");




$Livres = new Livre(1,"AAmAR","AAmirelmal",[$l1, $lB,$lA],$cat);

 foreach($Livres->getTags() as $tag) {
    var_dump($tag->getTag());
}





?>
