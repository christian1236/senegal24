<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../../assets/index.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?></h1>
    <p>C'est votre espace admin.</p>
    <nav class="modsup">
    <a href="../../index.php">Accueil</a> | 
      <a href="add_user.php">Ajouter</a> | 
      <a href="#">Modifier</a> | 
      <a href="#">Supprimer</a> | 
      <a href="../logout.php">Déconnexion</a>
    </nav>
</div>
  </body>
</html>