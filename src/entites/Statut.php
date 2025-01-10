<?php
namespace Src\Entites;
class Statut{
    private $id;
    private $nomStatut;
    
    

    public function __construct($id,$nomStatut){
        $this->id=$id;
        $this->nomStatut=$nomStatut;
        

    }
    
    public function getid()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id;

    }


    public function getStatut()
    {
        return $this->id;
    }
    public function setStatut($nomStatut)
    {
        $this->nomStatut;

    }
}
?>