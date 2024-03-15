<?php
include '../../bdd/SQLConnexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_FILES['image'])) {
        if ($_FILES['image']['error'] == 0) {
            $target_dir = "../../assets/images/";
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $nouveauNom = $_POST['nouveauNom'];
            $extension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
            $imagePath = $target_dir . $nouveauNom . ".". $extension;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                echo "Le fichier " . basename($_FILES["image"]["name"]) . " a été téléchargé.";
            } else {
                echo "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
            }
        } else {
            echo "Erreur lors du téléchargement de l'image. Code d'erreur : " . $_FILES['image']['error'];
        }
    }
    $conn = new SQLConnexion();
    $stmt = $conn-> bdd()->prepare("INSERT INTO projet (image) VALUES (?)");
    $stmt->execute([$imagePath]);
    echo 'Image ajouté avec succès!';
}
