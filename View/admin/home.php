<?php require('../../Model/admin/home.php')?>

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
    <a href="#">Accueil</a> | 
      <a href="add_user.php">Ajouter</a> | 
      <a href="#">Modifier</a> | 
      <a href="#">Supprimer</a> | 
      <a href="../../Model/auth/logout.php">Déconnexion</a>
    </nav>
    
    </div>
    <div class="article">
        <ul>
        <?php while($a = $users->fetch()) { ?>
        <li><?= $a['username']?></li>
        <li><?= $a['email']?></li>
        <li><?= $a['type']?></li>
        <nav class="modsup">
            <a href="../article.php?id=<?= $a['id']?>"> Afficher </a>
            <a href="../redaction.php?edit=<?= $a['id']?>"> Modifier </a>
            <a href="../../Model/supprimer.php?id=<?= $a['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer l\'article?')"> Supprimer  </a> </br></br>
        </nav>
        <?php } ?>
        <ul>
    </div> 
  </body>
</html>