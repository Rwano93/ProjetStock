<?php


include '../../bdd/SQLConnexion.php';
include '../utilisateur/Utilisateur.php';


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$remdp = $_POST['remdp'];


if ($remdp == $mdp) {
    $newmdp = password_hash($mdp,PASSWORD_DEFAULT);

    $prenom = strtolower($prenom);
    $user = new Utilisateur(["nom"=>strtoupper($nom), "prenom"=>ucfirst($prenom), "email"=>$email, "mdp"=>$newmdp, "fonction"=>"Elève"]);

    var_dump($user->getIdFonction());
    if ($user->regarderSiMailExiste()) {
        header("Location: ../../../html/inscription.html");
    } else {
        $user->inscription();
    }
} else {
    header("Location: ../../../html/inscription.html");
}
