<!DOCTYPE html>
<html lang="en">
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

</body>
</html>
