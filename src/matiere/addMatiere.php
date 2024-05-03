<?php
include '../bdd/SQLConnexion.php';
include '../matiere/Matiere.php';

$nom = $_POST['nom'];
$longueur = $_POST['longueur'];
$largeur = $_POST['largeur'];
$hauteur = $_POST['hauteur'];
$epaisseur = $_POST['epaisseur'];
$diametre = $_POST['diametre'];


$matiere = new Matiere([
  'nom' => $nom,
  'longueur' => $longueur,
  'largeur' => $largeur,
  'hauteur' => $hauteur,
  'epaisseur' => $epaisseur,
  'diametre' => $diametre
]);


$matiere->ajouter();


echo '<div class="box">
        <div class="dimension-label">' . $nom . '</div>
        <div class="dimension-label">Longueur: ' . $longueur . '</div>
        <div class="dimension-label">Largeur: ' . $largeur . '</div>
        <div class="dimension-label">Hauteur: ' . $hauteur . '</div>
        <div class="button-container">
          <button class="modify">Modifier</button>
          <button class="delete">Supprimer</button>
        </div>
      </div>';
?>
