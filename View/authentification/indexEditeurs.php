<?php
    require '../../Model/config.php';
    require '../../Model/index.php';
?>
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
	<meta charset="utf-8">
	<title>Infos du jour</title>
	<link rel="stylesheet" href="../../assets/style.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/index.css">
	</head>
	<body>
		
	<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		<p>C'est votre tableau de bord.</p>
		<a href="logout.php">Déconnexion</a>
		</div>

	<?php require_once '../head.php'; ?>
    <div class="article">
        <ul>
        <?php while($a = $articles->fetch()) { ?>
        <li><h1><?= $a['titre']?></h1>
        <nav class="modsup">
            <a href="../article.php?id=<?= $a['id']?>"> Afficher </a>
            <a href="../redaction.php?edit=<?= $a['id']?>"> Modifier </a>
            <a href="../../Model/supprimer.php?id=<?= $a['id']?>" onclick="return confirm('Etes-vous sûr de vouloir supprimer l\'article?')"> Supprimer  </a> </br></br> 
   
        </nav>
            <p><?= $a['contenu']?></p> </li>
        <?php } ?>
        <ul>
    </div> 
    <?php require_once '../pagination.php'; ?>
		

	</body>
</html>