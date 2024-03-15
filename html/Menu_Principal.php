<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menu Principal</title>

    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        select,
        input,
        button {
            margin-bottom: 10px;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            background-color: #f0f0f0;
            transition: background-color 0.3s ease;
        }

        select:hover,
        input:hover,
        button:hover {
            background-color: #e0e0e0;
        }

        select,
        input {
            width: calc(100% - 40px);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .btn-vert {
            background-color: #4caf50;
            color: #fff;
        }

        .btn-orange {
            background-color: #ff9800;
            color: #fff;
        }

        .btn-rouge {
            background-color: #f44336;
            color: #fff;
        }

        .btn-bleu {
            background-color: #2196f3;
            color: #fff;
        }
    </style>
</head>
<body>

<header class="date-header">
    <div class="container">
        <p class="date" id="currentDate"></p>
    </div>
</header>

<div class="container">
        
    <select class="scrolll" name="professeur" id="professeur-select" required>
        <option value="">Choix Professeur</option>
        <option value="M.Lestrelin">M.Lestrelin</option>
        <option value="M.Lemoine">M.Lemoine</option>
        <option value="M.Mattei">M.Mattei</option>
    </select>
    <br>
    <select class="scrolll" name="unite-Pedagogique" id="unite-select" required>
        <option value="">Choix de classe</option>
        <!-- Ajoutez vos options ici -->
    </select>
    <br>
    <input type="date" id="dateCommande" name="date" required>
    <br>
    <select class="scrolll" name="fournisseur" id="fournisseur-select" required>
        <option value="">Choix du fournisseur</option>
        <!-- Ajoutez vos options ici -->
    </select>
    <br>
    <h2>Menu Principal</h2>
    <button class="btn-vert" name="btncommande">Commander</button>
    
    <form action="ajouter.html" method="post">
        <button class="btn-orange" name="btnajout">Ajouter</button>
    </form>
        
    <button class="btn-rouge" name="btnerreur">Erreur</button>
    <form action="gestionDeProjet.php">
        <button type="submit" class="btn-bleu" name="btnprojet">Débit</button>
    </form>
</div>

</body>
</html>
