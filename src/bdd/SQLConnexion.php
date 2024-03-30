<?php
class SQLConnexion {

    private $host = "localhost";

    private $database = "projetstock";
    
    private $username = "root";
    private $password = "";
<<<<<<< HEAD
    private $database = "projetstock";
=======
    
>>>>>>> 9dedec4ffb33294d4d8a4397c2478f0f7545e29f
    public function connexion() {

        $pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';',$this->username, $this->password);


        return $pdo;
    }
}