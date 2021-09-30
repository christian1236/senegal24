<?php
   require 'config.php';
   if(isset($_GET['id']) AND !empty($_GET['id'])) {
      $suppr_id = htmlspecialchars($_GET['id']);
      $suppr = $bdd->prepare('DELETE FROM Article WHERE id = ?');
      $suppr->execute(array($suppr_id));
      header('Location: http://localhost:8888/aL/index.php');
   }
?>