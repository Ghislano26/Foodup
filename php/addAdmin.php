
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

    $preparation = "INSERT INTO admin (nom, prenom, email, age) VALUES ('$name', '$lastname', '$mail', '$age')";
    $exution = mysqli_query($connexion, $preparation);

    header('Location: admin.php');

?>














