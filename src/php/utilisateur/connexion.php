<?php

var_dump($_POST);

include 'Utilisateur.php';

$email = $_POST['email'];
$mdp = $_POST['mdp'];

$estOk = Utilisateur::CONNEXION($email, $mdp);
if ($estOk){
    header('Location: ../../../html/gestionMatiere.php');
}else{
    header('Location: ../../../html/connexion.html');
}

 


