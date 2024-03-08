<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="../css/gestionDeProjet.css">
    <h1>Bon de débit Matière</h1>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 10px;
            background-color: #3498db; /* Bleu vif */
            color: #fff;
            margin: 0;
            border-radius: 5px;
            
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8f8f8; /* Blanc légèrement grisé */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            position: relative;
        }

        .image {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            width: 80px; /* Réduire la taille du logo de 100px */
            height: 80px; /* Réduire la taille du logo de 100px */
            object-fit: cover;
        }

        .scroll {
            width: 100%;
            max-height: 150px;
            overflow-y: scroll;
            scroll-behavior: smooth;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .checkbox-container {
            margin-bottom: 20px;
        }

        .checkbox-container label {
            margin-right: 10px;
        }

        .checkbox-container input {
            margin-right: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #f8f8f8; /* Blanc légèrement grisé */
            color: #333;
            padding: 10px 20px;
            border: 1px solid #ccc;
            cursor: pointer;
            display: block;
            margin: 20px auto;
            border-radius: 5px;
        }

        button:hover {
            background-color: #e0e0e0; /* Blanc encore plus grisé au survol */
        }
        img {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            width: 80px; /* Réduire la taille du logo de 100px */
            height: 80px; /* Réduire la taille du logo de 100px */
            object-fit: cover;
        }   
    </style>
    <img src="../assets/images/50-Lycee-Robert-Schuman.jpg" alt="">
</head>
<body>
    <div class="container">
        <h1>Gestion de débit</h1>

        <select class="scroll" name="professeurProjet" id="professeurProjet-select" required>
            <option value="">Choix du professeur</option>
        </select>
        <br>
        <br>
        <div class="checkbox-container">
            Filière:
            <label><input type="checkbox" name="tu"> TU</label>
            <label><input type="checkbox" name="cprp"> CPRP</label>
            <label><input type="checkbox" name="cged"> CQPM</label>
            <label><input type="checkbox" name="spe"> SPE</label>
        </div>
        <img class="image" alt="visuelPiece" name="imagePiece" id="imagePiece" src="../assets/images/50-Lycee-Robert-Schuman.jpg" width="80" height="80" required>
        <br>
        <select class="scroll" name="classeProjet" id="classeProjet-select" required>
            <option value="">Choix de la classe</option>
        </select>
        <br>
        <select class="scroll" name="choixMateriaux" id="choixMateriaux-select" required>
            <option value="">Choix du matériau</option>
        </select>
        <br>
        <select class="scroll" name="systemeProjet" id="systemeProjet-select" required>
            <option value="">Choix du projet</option>
        </select>
        <br>
        <select class="scroll" name="pieceProjet" id="pieceProjet-select" required>
            <option value="">Choix de la pièce</option>
        </select>
        <br>
        <select class="scroll" name="forme" id="forme-select" required>
            <option value="">Choix de la forme</option>
        </select>
        <br>
        <select class="scroll" name="dimension" id="dimension-select" required>
            <option value="">Choix de la dimension</option>
        </select>
        <br>
        <input type="text" name="quantite" placeholder="Quantité">
        <br>
        <input type="text" name="longeur" placeholder="Longueur">
        <br>
        <input type="text" name="stockinitial" placeholder="Stock initial">
        <br>
        <input type="text" name="stockfinal" placeholder="Stock final">
        <br>
        <button type="submit">Soumettre</button>
    </div>
</body>
</html>
