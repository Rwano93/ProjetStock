<?php
class SQLConnexion {

    private $host = "localhost";

    private $database = "projetstock";
    
    private $username = "root";
    private $password = "";
    
    public function connexion() {

        $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';',$this->username, $this->password);


        return $pdo;
    }
}