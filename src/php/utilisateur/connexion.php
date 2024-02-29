<?php

var_dump($_POST);

include '../../../src/bdd/SQLConnexion.php';

$mdp = $_POST['mdp'];
$email = $_POST['email'];

Utilisateur::connexion($email, $mdp);
 


