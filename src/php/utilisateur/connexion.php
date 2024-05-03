<?php

var_dump($_POST);
include ('../../bdd/SQLConnexion.php');
include ('Utilisateur.php');

<<<<<<< HEAD
$utlisateur = new Utilisateur($_POST);

$utlisateur->connexion();



if ($utlisateur->connexion() == true){
    
        session_start();
        header('Location: ../../../html/Menu_Principal.php');

    
=======
include 'Utilisateur.php';
require_once '../../bdd/SQLConnexion.php';
>>>>>>> 5c0222c8840bc45e8b9027782ae8123e0a1dc403
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
<<<<<<< HEAD


 


=======
>>>>>>> 5c0222c8840bc45e8b9027782ae8123e0a1dc403
