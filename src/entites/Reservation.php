<?php
namespace src\entites;
 
class Reservation {
    private $id;
    private $nom;
    private $dateCreate;
    private Statut $statut;  
    private  Livre $livre;    
    private   $users;     

    
    public function __construct() {}
       

    
    public function getLivre() {
        return $this->livre; 

    }
    public function setLivre( $livre) {
        $this->livre = $livre; 
    }

   
    public function getUsers() {
        return $this->users;
    }


    public function setUsers( $users) {
        $this->users = $users; 
    }
    public function getId() {
        return $this->id;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

   
    public function getNom() {
        return $this->nom;
    }

   
    public function setNom($nom) {
        $this->nom = $nom;
    }

    
    public function getDate() {
        return $this->dateCreate; 
    }

   
    public function setDateCreate($dateCreate) {
        $this->dateCreate = $dateCreate;
    }

    
    public function getStatut() {
        return $this->statut; 
    }


    public function setStatut( $statut) {
        $this->statut = $statut; 
    }
    public function DeletedReservation(){
        $query = 'Delete from reservation  where id=:id';
        $con = ParentEntity::getConnexion();
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $this->id);
        return $stmt->execute();
    }
    
}





?>
