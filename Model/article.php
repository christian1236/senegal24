<?php
    require 'config.php';
    if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']);
    $article = $bdd->prepare('SELECT * FROM Article WHERE id = ?');
    $article->execute(array($get_id));
        if($article->rowCount() == 1) {
            $article = $article->fetch();
            $titre = $article['titre'];
            $contenu = $article['contenu'];
        } else {
            die('Cet article n\'existe pas !');
        }
    } else {
    die('Erreur');
    }
?>