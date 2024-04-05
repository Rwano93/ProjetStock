<?php
var_dump($_FILES);
    if(isset($_POST["valider"])){
        $bdd = new pdo('mysql:host=localhost:8889;dbname=projetstock;charset=utf8', 'root', 'root');
        $req=$bdd->prepare('INSERT INTO image (nom, taille, type, bin) VALUES (?, ?, ?, ?)');
        $req->execute(array($_FILES['image']['name'], $_FILES['image']['size'], $_FILES['image']['type'], file_get_contents($_FILES['image']['tmp_name'])));
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajout d'une image</title>
    </head>
    <body>
        <form name = "test" method="post" action="" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="valider"  value="charger">
        </form>
    </body>
