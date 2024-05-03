<?php

var_dump($_POST);
include ('../../bdd/SQLConnexion.php');
include ('Utilisateur.php');

$utlisateur = new Utilisateur($_POST);

$utlisateur->connexion();



if ($utlisateur->connexion() == true){
    
        session_start();
        header('Location: ../../../html/Menu_Principal.php');

    
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$estOk = Utilisateur::CONNEXION($email, $mdp);
if ($estOk){
    header('Location: ../../../html/gestionMatiere.php');
}else{
    header('Location: ../../../html/connexion.html');
}


 


