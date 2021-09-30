<?php
    $articles = $bdd->query('SELECT * FROM Article ORDER BY dateCreation DESC LIMIT 0,3');
    $categories = $bdd->query('SELECT * FROM Categorie');
?>