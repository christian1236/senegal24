<?php
    require 'Model/config.php';
    require 'Model/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Infos du jour</title>
	<link rel="stylesheet" type="text/css" href="./assets/index.css">
</head>
<body>
<div class="auth">   
<a href="View/authentification/login.php">Connexion</a>
<a href="View/authentification/register.php">Inscription</a>
<a href="View/admin/login.php">Admin</a>
</div>
<div id="entete">
        <h1>Bienvenue sur Sénégal24 </h1>
    </div> 
    <nav class="menu">
        <a href="./index.php">Home</a>
        <a href="View/redaction.php">Ajouter</a>
        <?php while($a = $categories->fetch()) { ?>
            <a href="./View/parCategorie.php?id=<?= $a['id'] ?>"><?= $a['libelle'] ?></a>
            <?php } ?>
        <div class="animation start-home"></div>
        
    </nav>   
</body>
</html>