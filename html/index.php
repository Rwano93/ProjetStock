<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Panneau Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="../css/styles.css"/>

    <!-- JavaScripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
<?php
include '../src/bdd/SQLConnexion.php';

session_start();

if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
} else {
    header("Location: ../html/connexion.html");
}
 ?>



<div class="side-bar-big">
    <a href="gestionMatiere.php">Gestion des Matière :</a>
    <a href="#">Gestion des Projets :</a>
    <a href="#">Débit de Matière :</a>
    <a href="#">Commande de Matière :</a>
    <a class="account" href="#"><?=$_SESSION['nom'] . " " . $_SESSION['prenom']?></a>
</div>

<div class="side-bar-small">

</div>

<div class="content">
    <h1>Salut</h1>
</div>
</body>
</html>
