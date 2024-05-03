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
      min-height: 100vh;
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
      background-color: #f8f8f8;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      position: relative;
      flex-grow: 1;
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
      background-color: #f0f0f0;
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
      font-size: 14px;
      margin-bottom: 5px;
    }

    .add-container {
      border: 1px dashed #ccc;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      width: calc(33.33% - 20px);
      box-sizing: border-box;
      background-color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
    }

    .add-container:hover {
      background-color: #f0f0f0;
    }

    .add-container i {
      font-size: 24px;
      margin-right: 10px;
    }

    .add-container span {
      font-weight: bold;
      font-size: 16px;
    }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }

    .modal-content {
      background-color: #fefefe;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
    .side-bar-action {
      position: fixed;
      top: 0;
      right: 0; 
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 0 10px 10px 0; 
    }
    
    .side-bar-action a {
      display: block;
      margin-bottom: 10px;
      color: #333;
      text-decoration: none;
    }
    
    .side-bar-action a:last-child {
      margin-bottom: 0;
    }

  </style>
</head>
<body>
<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header">
    <a id="nav-title" href="gestionMatiere.php" target="_blank">Gestion Stock <i class="fab fa-codepen"></i></a>
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
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#deconnexion').on('click', function() {
      window.location.href = "../src/php/utilisateur/deconnexion.php"; 
    });
    
    $('#ajouterMatiere').on('click', function() {
      $('#modal-ajouter').css('display', 'block');
    });

    $('.close').on('click', function() {
      $('.modal').css('display', 'none');
    });

    $('#form-ajout-matiere').submit(function(event) {
      event.preventDefault();

      var formData = $(this).serialize();

      $.ajax({
        url: '../src/matiere/addMatiere.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          $('.checkbox-container').append(response);
          $('.modal').css('display', 'none');
        }
      });
    });
  });

  var modalAjouter = document.getElementById("modal-ajouter");
  var modalNouvelleForme = document.getElementById("modal-nouvelle-forme");
  var modalNouveauMateriau = document.getElementById("modal-nouveau-materiau");

  var spanAjouter = document.getElementsByClassName("close")[0];
  var spanNouvelleForme = document.getElementsByClassName("close-nouvelle-forme")[0];
  var spanNouveauMateriau = document.getElementsByClassName("close-nouveau-materiau")[0];

  function ajouterMatiere() {
    modalAjouter.style.display = "block";
  }

  function afficherModalAjouter() {
    var modalAjouter = document.getElementById("modal-ajouter");
    modalAjouter.style.display = "block";
  }

  function afficherModalNouvelleForme() {
    modalNouvelleForme.style.display = "block";
  }

  function afficherModalNouveauMateriau() {
    modalNouveauMateriau.style.display = "block";
  }

  spanAjouter.onclick = function () {
    modalAjouter.style.display = "none";
  }

  spanNouvelleForme.onclick = function () {
    modalNouvelleForme.style.display = "none";
  }

  spanNouveauMateriau.onclick = function () {
    modalNouveauMateriau.style.display = "none";
  }

  function afficher(id) {
    var matiere = document.getElementById('matiere' + id);
  }

  window.onclick = function (event) {
    if (event.target == modalAjouter) {
      modalAjouter.style.display = "none";
    } else if (event.target == modalNouvelleForme) {
      modalNouvelleForme.style.display = "none";
    } else if (event.target == modalNouveauMateriau) {
      modalNouveauMateriau.style.display = "none";
    }
  };

  window.onload = function () {
    prefillFields();
  };
</script>

<div class="side-bar-action">
  <a href="#modal-ajouter" onclick="afficherModalAjouter()">Ajouter Matière</a>
  <a href="#modal-nouvelle-forme" onclick="afficherModalNouvelleForme()">Nouvelle Forme</a>
  <a href="#modal-nouveau-materiau" onclick="afficherModalNouveauMateriau()">Nouveau Matériau</a>
  <br>
</div>
<!-- Ajouter Matiere -->
<div id="modal-ajouter" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Ajouter une matière</h2>
    <form id="form-ajout-matiere" method="post">
      <input type="text" name="nom" placeholder="Nom de la matière" required>
      <input type="text" name="longueur" placeholder="Longueur" required>
      <input type="text" name="largeur" placeholder="Largeur" required>
      <input type="text" name="hauteur" placeholder="Hauteur" required>
      <input type="text" name="epaisseur" placeholder="Epaisseur" required>
      <input type="text" name="diametre" placeholder="Diamètre" required>
      <button type="submit">Ajouter</button>
    </form>
  </div>
</div>

<!-- Nouvelle Forme -->
<div id="modal-nouvelle-forme" class="modal">
  <form method="post" action="">
    <div class="modal-header">
      <h1>Nouvelle Forme</h1>
      <span class="close">&times;</span>
    </div>
    <div class="modal-content">
      <input type="text" name="libelle" placeholder="Nom de la forme">
      <input type="text" name="longueur" placeholder="Longueur">
      <input type="text" name="largeur" placeholder="Largeur">
      <input type="text" name="epaisseur" placeholder="Épaisseur">
      <input type="text" name="diametre" placeholder="Diamètre">
      <input type="text" name="hauteur" placeholder="Hauteur">
    </div>
    <div class="modal-footer">
      <button type="reset">Réinitialiser</button>
      <button name="addForme" type="submit">Ajouter</button>
    </div>
  </form>
</div>

<!-- Nouveau Matériau -->
<div id="modal-nouveau-materiau" class="modal">
  <form method="post" action="">
    <div class="modal-header">
      <h1>Nouveau Matériau</h1>
      <span class="close">&times;</span>
    </div>
    <div class="modal-content">
      <input type="text" name="libelleMateriau" placeholder="Libellé">
    </div>
    <div class="modal-footer">
      <button type="reset">Réinitialiser</button>
      <button name="addMateriau" type="submit">Ajouter</button>
    </div>
  </form>
</div>

</body>
</html>
