<?php

    $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
        


    $test = $connexion->prepare('DELETE FROM chiefs WHERE id=:num LIMIT 1');

    $test->bindValue(':num', $_GET['numChef'], PDO::PARAM_INT);

    $test->execute();


    header('Location: deleteChef.php');

?>