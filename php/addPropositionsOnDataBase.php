<?php

    try {
        $connexion = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'foodup' );
        
    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
    }

    // recuperation des informations du formulaire
    $speudo = strip_tags($_POST['speudo']);
    $address = strip_tags($_POST['address']);
    $recette = strip_tags($_POST['commentaire']);

    $test = "INSERT INTO propositions (name, email, recette) VALUES ('$speudo', '$address', '$recette')";
    $exution = mysqli_query($connexion, $test);

    // if ($exution) {
    //     alert("Vos propositions ont bien ete ajoute");
    // }


    header('Location: indSalad.php');

?>