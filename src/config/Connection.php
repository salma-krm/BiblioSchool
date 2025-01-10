<?php

namespace src\config;
use PDO;
use PDOException;

class Connection {
    
    private  $servename = "localhost"; 
    private  $username = "root";  
    private $password = "";  
    private  $dbname = "biblioschool"; 

    public function connect(): PDO {
        try {
            $conn = new PDO("mysql:host={$this->servename};dbname={$this->dbname}", $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getmessage();
        }
        return $conn;
    }
}


?>
