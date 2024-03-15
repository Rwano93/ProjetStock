<?php

var_dump($_POST);

include 'Utilisateur.php';

$email = $_POST['email'];
$mdp = $_POST['mdp'];

$estOk = Utilisateur::connexion($email, $mdp);
if ($estOk){
    header('Location: ../../../html/Menu_Principal.php');
}else{
    header('Location: ../../../html/connexion.html');
}

 


