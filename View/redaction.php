<?php
   require '../Model/redaction.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title>Rédaction / Edition</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../assets/ajout.css" />
</head>
<body>
   <form class="box" method="POST">
   <h1 class="box-logo box-title"><a href="../index.php">Mes Articles</a></h1>
      <input type="text" class="box-input" name="article_titre" placeholder="Titre"<?php if($mode_edition == 1) { ?> value="<?=$edit_article['titre'] ?>"<?php } ?> required/><br />
      <textarea class="box-input" name="article_contenu" placeholder="Contenu de l'article" required><?php if($mode_edition == 1) { ?><?=$edit_article['contenu'] ?><?php }  ?></textarea><br />
      <input type="submit" value="Envoyer l'article" class="box-button"/>
      <p><?php if(isset($message)) { echo $message; } ?></p>
   </form>
   <br />
</body>
</html>