<?php
class SQLConnexion {
    private $conn;
    public function __construct()
    {

        try {
            $this->conn = new PDO("mysql:host=localhost:8889;dbname=projetvol;charset=utf8', 'root', 'root");

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {

        }
    }

    public function bdd(): PDO {


        return $this->conn;
    }
}