<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="../css/menu_principal.css">
    <link rel="stylesheet" href="../css/mes-styles.css">
   
    <style>
        body {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px; /* Ajout du border-radius */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            align-items: center;
        }

        .container {
            text-align: center;
            padding: 20px; /* Ajout d'un espacement autour des éléments */
        }

        select,
        input,
        button {
            margin-bottom: 10px; /* Ajout d'un espacement entre les éléments */
        }
    </style>
</head>
<body>
    <div class="container">
        Professeur : <select class="scrolll" name="professeur" id="professeur-select" required>
            <option value="">Choix Professeur</option>
            <option value="M.Lestrelin">M.Lestrelin</option>
            <option value="M.Lemoine">M.Lemoine</option>
            <option value="M.Mattei">M.Mattei</option>
        </select>
        <br>
        Unité pédagogique : <select class="scrolll" name="unite-Pedagogique" id="unite-select" required>
            <option value="">Choix de classe</option>
            <option value="1">SLAM1</option>
            <option value="2">SLAM2</option>
            <option value="3">SISR1</option>
            <option value="4">SISR2</option>
            <option value="5">MEI1</option>
            <option value="6">MEI2</option>
        </select>
        <br>
        Date : <input type="date" id="dateCommande" name="date" required>
        <br>
        Fournisseur : <select class="scrolll" name="fournisseur" id="fournisseur-select" required>
            <option value="">Choix du fournisseur</option>
            <option></option>
        </select>
        <br>
        <h2>Menu Principal</h2>
        <button class="btn-orange" name="btncommande">Commander</button>
        <button class="btn-rouge" name="btnajout">Ajouter</button>
        <button class="btn-vert" name="btnerreur">Erreur</button>
        <form action="gestionDeProjet.php">
            <button type="text" class="btn-bleu" name="btnprojet">Débit</button>
        </form>
    </div>
</body>
</html>
