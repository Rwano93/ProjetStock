<?php
class SQLConnexion {
    private $host = "localhost";
    
    private $username = "root";
    private $password = "";
    private $database = "projetstock";
    public function connexion() {

        $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';',$this->username, $this->password);


        

        return $pdo;
    }
}