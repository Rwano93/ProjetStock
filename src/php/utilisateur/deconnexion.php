<?php

include '../../bdd/SQLConnexion.php';

var_dump($_POST);

include 'Utilisateur.php';

$email = $_POST['email'];

$estOk = Utilisateur::deconnexion();
if ($estOk){
    header('Location: ../../../html/connexion.html');
}else{
    header('Location: ../../../html/Menu_Principal.php');
}



