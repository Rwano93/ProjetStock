<!DOCTYPE html>
<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <title>ProjetStock</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div id="nav-bar">
    <input id="nav-toggle" type="checkbox"/>
    <div id="nav-header">
        <a id="nav-title" href="Menu_Principal.php" target="_blank">C<i class="fab fa-codepen"></i>DEPEN</a>
        <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
        <hr/>
    </div>
    <div id="nav-content">
        <a href="GestionMatiere.php" class="nav-button"><i class="fas fa-images"></i><span>Gestion Matière</span></a>
        <a href="GestionProjet.php" class="nav-button"><i class="fas fa-thumbtack"></i><span>Gestion Projet</span></a>
        <hr/>
        <a href="DebitMatiere.php" class="nav-button"><i class="fas fa-heart"></i><span>Débit Matière</span></a>
        <a href="CommandeMatiere.php" class="nav-button"><i class="fas fa-chart-line"></i><span>Commande De Matière</span></a>
        <hr/>
        <div class="nav-button" id="deconnexion"><i class="fas fa-sign-out-alt"></i><span>Déconnexion</span></div>
    </div>
    <input id="nav-footer-toggle" type="checkbox"/>
    <div id="nav-footer">
        <div id="nav-footer-heading">
            <div id="nav-footer-avatar"><img src="../assets/images/50-Lycee-Robert-Schuman.jpg"/></div>
            <div id="nav-footer-titlebox"><a id="nav-footer-title" href="https://codepen.io/uahnbu/pens/public" target="_blank">uahnbu</a><span id="nav-footer-subtitle">Admin</span></div>
            <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
        </div>
        <div id="nav-footer-content">
            <Lorem>Bienvenue dans notre projet stock
                Erwan, Nathan, Ilyes 
            </Lorem>
        </div>
    </div>
</div>

<!-- Script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#deconnexion').on('click', function() {
            window.location.href = "../src/php/utilisateur/deconnexion.php"; 
        });
    });
</script>

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
    <button class="btn-orange" name="btnajout">Ajouter</button>
    <button class="btn-rouge" name="btnerreur">Erreur</button>
    <form action="gestionDeProjet.php">
        <button type="submit" class="btn-bleu" name="btnprojet">Débit</button>
    </form>
</div>

</body>
</html>
