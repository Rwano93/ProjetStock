<?php

var_dump($_POST);

include '../../../src/bdd/SQLConnexion.php';
include '../utilisateur/Utilisateur.php';

$email = $_POST['email'];
$mdp = $_POST['mdp'];

Utilisateur::connexion($email, $mdp);


 


