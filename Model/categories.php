<?php
	require 'config.php';
    if(isset($_GET['id']) AND !empty($_GET['id'])) {
		$get_id = htmlspecialchars($_GET['id']);
		$categories = $bdd->prepare('SELECT * FROM Categorie WHERE id = ?');
		$categories->execute(array($get_id));
	  if($categories->rowCount() == 1) {
		   $categories = $categories->fetch();
		   $libelle = $categories['libelle'];
		   $idee=$categories['id'];
		} else {
		   die('categorie not found!');
		}
	 $articles=$bdd->query('SELECT * FROM Article WHERE categorie= '.$idee);
	}
	$categories = $bdd->query('SELECT * FROM Categorie');
	 
?>