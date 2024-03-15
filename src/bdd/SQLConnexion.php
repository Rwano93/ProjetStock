<?php
include "../php/utilisateur/Utilisateur.php";
class SQLConnexion {
    private $conn;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bddname = "projetstock";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=".$bddname, $username, $password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {

        }
    }

    public function bdd(): PDO {


        return $this->conn;
    }
}