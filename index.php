<?php
    require 'Model/config.php';
    require 'Model/index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Infos du jour</title>
	<link rel="stylesheet" type="text/css" href="./assets/index.css">
</head>
<body>
    <?php require_once './View/head.php'; ?>
    <div class="article">
        <ul>
        <?php while($a = $articles->fetch()) { ?>
        <li><h1><?= $a['titre']?></h1>
        <nav class="modsup">
            <a href="./View/article.php?id=<?= $a['id']?>"> Afficher </a>
            <a href="./View/redaction.php?edit=<?= $a['id']?>"> Modifier </a>
            <a href="Model/supprimer.php?id=<?= $a['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer l\'article?')"> Supprimer  </a> </br></br> 
   
        </nav>
            <p maxlength="20"><?= $a['contenu']?></p> </li>
        <?php } ?>
        <ul>
    </div> 
    <?php require_once './View/pagination.php'; ?>
</body>
</html>