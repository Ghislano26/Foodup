<?php

    $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
        


    $test = $connexion->prepare('DELETE FROM recettes WHERE id=:numR LIMIT 1');

    $test->bindValue(':numR', $_GET['numRecipes'], PDO::PARAM_INT);

    $test->execute();


    header('Location: deleteRecipes.php');

?>