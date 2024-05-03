<?php

include 'Utilisateur.php';
require_once '../../bdd/SQLConnexion.php';
var_dump($_POST);
$email = $_POST['email'];
$mdp = $_POST['mdp'];

$estOk = new Utilisateur(
    [
        'email' => $email,
        'mdp' => $mdp
    ]
);
$estOk->CONNEXION($email, $mdp);
if ($estOk){
    header('Location: ../../../html/gestionMatiere.php');
}else{
    header('Location: ../../../html/connexion.html');
}