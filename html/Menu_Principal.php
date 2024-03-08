
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Menu Principal</title>

    <style>
        body {
            background-color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            
        }

        .container {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        select,
        input,
        button {
            margin-bottom: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            background-color: beige;
        }


        select, input {
            width: 100%;
            box-sizing: border-box;
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
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" href="../css/menu_principal.css">
        <link rel="stylesheet" href="../css/mes-styles.css">
        <body style="background-color:white;">

        Professeur : <select class="scrolll" name="professeur" id="professeur-select" required>
            <option value="">Choix Professeur</option>
            <option value="M.Lestrelin">M.Lestrelin</option>
            <option value="M.Lemoine">M.Lemoine</option>
            <option value="M.Mattei">M.Mattei</option>
        </select>
        <br>
        Unite pedagogique : <select class="scrolll" name="unite-Pedagogique" id="unite-select" required>
            <option value="">Choix de classe</option>
            <option></option>
        </select>
        <br>
        Date : <input type="date" id="dateCommande" name="date" required>
        <br>
        Fournisseur : <select class="scrolll" name="fournisseur" id="fournisseur-select" required>
            <option value="">Choix du fournisseur</option>
            <option></option>
        </select>
        <br>
        <h2>Menue Principal</h2>
        <button class="btn-vert" name="btncommande">Commander</button>
        <button class="btn-orange" name="btnajout">Ajouter</button>
        <button class="btn-rouge" name="btnerreur">Erreur</button>
        <form action="gestionDeProjet.php">
            <button type="submit" class="btn-bleu" name="btnprojet">Débit</button>
        </form>
        </body>
    </div>

</body>
</html>
