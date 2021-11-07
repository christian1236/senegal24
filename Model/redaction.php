<?php
require '../Model/config.php';
$mode_edition = 0;
if(isset($_GET['edit']) AND !empty($_GET['edit'])) {
   $mode_edition = 1;
   $edit_id = htmlspecialchars($_GET['edit']);
   $edit_article = $bdd->prepare('SELECT * FROM Article WHERE id = ?');
   $edit_article->execute(array($edit_id));
   if($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
   } else {
      die('Erreur : l\'article n\'existe pas...');
   }
}
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
   if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {
      
      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);
      $article_categorie = htmlspecialchars($_POST['article_categorie']);
      if($mode_edition == 0) {
         $ins = $bdd->prepare('INSERT INTO Article (titre, contenu, dateCreation, categorie) VALUES (?, ?, NOW(),?)');
         $ins->execute(array($article_titre, $article_contenu, $article_categorie));
         $message = 'Votre article a bien été posté';
      } else {
         $update = $bdd->prepare('UPDATE Article SET titre = ?, contenu = ?, dateModification = NOW(), categorie = ?, WHERE id = ?');
         $update->execute(array($article_titre, $article_contenu, $article_categorie, $edit_id));
         header('Location: http://localhost:8888/aL/index.php?id='.$edit_id);
         $message = 'Votre article a bien été mis à jour !';
      }
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>