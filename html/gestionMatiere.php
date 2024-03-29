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
      min-height: 100vh; /* Ajout pour s'étendre sur toute la hauteur de la fenêtre */
      display: flex;
      flex-direction: column;
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

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #f8f8f8; /* Blanc légèrement grisé */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      position: relative;
      flex-grow: 1; /* Pour étirer le contenu */
    }

    .checkbox-container {
      margin-bottom: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .box {
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      width: calc(33.33% - 20px);
      box-sizing: border-box;
      background-color: #f0f0f0; /* Couleur de fond plus foncée */
    }

    .box:nth-child(3n) {
      margin-right: 0;
    }

    .box:last-child {
      margin-right: 0;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .button-container button {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button-container button.modify {
      background-color: #3498db;
      color: #fff;
    }

    .button-container button.delete {
      background-color: #e74c3c;
      color: #fff;
    }

    .dimension-label {
      font-size: 14px; /* Réduit la taille de la police */
      margin-bottom: 5px; /* Réduit l'espacement en bas */
    }

    .add-container {
      border: 1px dashed #ccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      width: calc(33.33% - 20px);
      box-sizing: border-box;
      background-color: #fff; /* Couleur de fond blanche */
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    .add-container:hover {
      background-color: #f0f0f0; /* Couleur de fond gris clair au survol */
    }

    .add-container i {
      font-size: 24px;
      margin-right: 10px;
    }

    .add-container span {
      font-weight: bold;
      font-size: 16px;
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
        Erwan, Nathan 
      </Lorem>
    </div>
  </div>
</div>

<div class="container">
  <div class="checkbox-container">
    <div class="box">
      <div class="dimension-label">ALUMINIUM</div>
      <div class="dimension-label">Longueur: 20px</div>
      <div class="dimension-label">Largeur: 20px</div>
      <div class="dimension-label">Hauteur: 20px</div>
      <div class="button-container">
        <button class="modify">Modifier</button>
        <button class="delete">Supprimer</button>
      </div>
    </div>
    <div class="box">
      <div class="dimension-label">BRONZE</div>
      <div class="dimension-label">Longueur: 20px</div>
      <div class="dimension-label">Largeur: 20px</div>
      <div class="dimension-label">Hauteur: 20px</div>
      <div class="button-container">
        <button class="modify">Modifier</button>
        <button class="delete">Supprimer</button>
      </div>
    </div>
    <div class="box">
      <div class="dimension-label">ACIER</div>
      <div class="dimension-label">Longueur: 20px</div>
      <div class="dimension-label">Largeur: 20px</div>
      <div class="dimension-label">Hauteur: 20px</div>
      <div class="button-container">
        <button class="modify">Modifier</button>
        <button class="delete">Supprimer</button>
      </div>
    </div>
    <div class="box">
      <div class="dimension-label">POM</div>
      <div class="dimension-label">Longueur: 20px</div>
      <div class="dimension-label">Largeur: 20px</div>
      <div class="dimension-label">Hauteur: 20px</div>
      <div class="button-container">
        <button class="modify">Modifier</button>
        <button class="delete">Supprimer</button>
      </div>
    </div>
    <div id="ajouterMatiere" class="add-container">
      <form action="ajouter.html"></form>
      <i class="fas fa-plus-circle"></i>
      <span>Ajouter</span>
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
    $('#ajouterMatiere').on('click', function() {
      window.location.href = "ajouter.html"; 
    });
  });
  
</script>

</body>
</html>
