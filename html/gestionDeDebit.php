<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ProjetStock</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .nav-button {
      position: relative;
      margin-left: 16px;
      padding-left: 16px;
      height: 54px;
      display: flex;
      align-items: center;
      color: var(--navbar-light-secondary);
      direction: ltr;
      cursor: pointer;
      z-index: 1;
      transition: color 0.2s, padding-left 0.2s;
    }

    .nav-button:hover {
      padding-left: 24px;
    }

    h1 {
      align-items: center;
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
    <a href="GestionDeProjet.php" class="nav-button"><i class="fas fa-thumbtack"></i><span>Gestion Projet</span></a>
    <hr/>
    <a href="gestionDeDebit.php" class="nav-button"><i class="fas fa-heart"></i><span>Débit Matière</span></a>
    <a href="commande.php" class="nav-button"><i class="fas fa-chart-line"></i><span>Commande De Matière</span></a>
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

<div class="container">
    <h1>Gestion de débit</h1>

    <select class="scroll" name="professeurProjet" id="professeurProjet-select" required>
        <option value="">Choix du professeur</option>
    </select>
    <br>
    <br>
    <div class="checkbox-container">
        Filière:
        <label><input type="checkbox" name="tu" value="TU"> TU</label>
        <label><input type="checkbox" name="cprp" value="CPRP"> CPRP</label>
        <label><input type="checkbox" name="cged" value="CQPM"> CQPM</label>
        <label><input type="checkbox" name="spe" value="SPE"> SPE</label>
        <label><input type="checkbox" name="sn"value="SN"> SN</label>
        <label><input type="checkbox" name="slam" value="SLAM"> SLAM</label>
        <label><input type="checkbox" name="sisr" value="SISR"> SISR</label>
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

<!-- Script jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#deconnexion').on('click', function() {
      window.location.href = "../src/php/utilisateur/deconnexion.php"; 
    });
  });
</script>

</body>
</html>
