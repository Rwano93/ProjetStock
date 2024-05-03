<?php

var_dump($_POST);
include ('../../bdd/SQLConnexion.php');
include ('Utilisateur.php');

$utlisateur = new Utilisateur($_POST);

$utlisateur->connexion();



if ($utlisateur->connexion() == true){
    
        session_start();
        header('Location: ../../../html/Menu_Principal.php');

    
}else{
    header('Location: ../../../html/connexion.html');
}


 


