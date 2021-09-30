<?php
require '../Model/config.php';
require '../Model/categories.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Infos du jour</title>
	<link rel="stylesheet" type="text/css" href="../assets/index.css">
</head>
<body>
    <div id="entete">
        <h1>Bienvenue sur Sénégal24</h1>
    </div> 
    <nav>
        <a href="../index.php">Home</a>
        <a href="../View/redaction.php">Ajouter</a>
        <?php while($a = $categories->fetch()) { ?>
            <a href="parCategorie.php?id=<?= $a['id'] ?>"><?= $a['libelle'] ?></a>
            <?php } ?>
        <div class="animation start-home"></div>
    </nav>  
    <div class="article">
        <ul>
        <?php while($a = $articles->fetch()) { ?>
        <li><h1><?= $a['titre']?></h1>
        <nav class="modsup">
            <a href="../View/article.php?id=<?= $a['id']?>"> Afficher </a>
            <a href="../View/redaction.php?edit=<?= $a['id']?>"> Modifier </a>
            <a href="../Model/supprimer.php?id=<?= $a['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer l\'article?')"> Supprimer  </a> </br></br> 
   
        </nav>
            <p><?= $a['contenu']?></p> </li>
        <?php } ?>
        <ul>
    </div> 
</body>
</html>