<?php

    try {
        $connexion = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'foodup' );
        
    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
    }

    // recuperation des informations du formulaire
    $auteur = strip_tags($_POST['auteur']);
    $recipes = strip_tags($_POST['speudo']);
    $dateOfAdd = strip_tags($_POST['dateOfAdd']);
    $ingred = strip_tags($_POST['ingred']);
    $imageRecette = strip_tags($_POST['imageRecette']);

    $test = "INSERT INTO recettes (auteur, recipes, date, ingredient, vue) VALUES ('$auteur', '$recipes', '$dateOfAdd', '$ingred', '$imageRecette')";
    $exution = mysqli_query($connexion, $test);



    header('Location: chef.php');

?>