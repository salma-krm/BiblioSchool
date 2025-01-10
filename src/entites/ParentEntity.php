<?php 
namespace Src\Entites;

use src\config\Connection;

class ParentEntity{
    public static function getConnexion() {
        return (new Connection())->connect();
    }

}