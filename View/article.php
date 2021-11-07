<?php
   require '../Model/config.php';
   require '../Model/article.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title>Accueil</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
   <div id="entete">
        <h1>Bienvenue sur Sénégal24 </h1>
    </div> 
    <nav>
        <a href="../index.php">Home</a>
        <div class="animation start-home"></div>
    </nav>  
<div class="article">
    <h1><?= $titre ?></h1>
        <nav class="modsup">
            <a href="./redaction.php?edit=<?= $a['id']?>"> Modifier </a>
            <a href="../Model/supprimer.php?id=<?= $a['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer l\'article?')"> Supprimer  </a> </br></br> 
        </nav>
      <p id="cont"><?= $contenu ?></p>
</div>
</body>
</html>