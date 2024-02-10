
<?php

    try {
        $connexion = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'foodup' );
        
    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
    }

    // recuperation des informations du formulaire

    $name = strip_tags($_POST['name']);
    $lastname = strip_tags($_POST['lastname']);
    $mail = strip_tags($_POST['mail']);
    $age = strip_tags($_POST['age']);
    $country = strip_tags($_POST['country']);

    $preparation = "INSERT INTO chiefs (name, lastname, address, age, country) VALUES ('$name', '$lastname', '$mail', '$age', '$country')";
    $exution = mysqli_query($connexion, $preparation);

    header('Location: admin.php');

?>