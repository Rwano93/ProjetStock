<?php
include '..//bdd/projetstock.sql';
include 'matiere.php';
$matiere = new Matiere($_POST);
$matiere->supprimer();

?>
