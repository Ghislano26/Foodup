<?php 


     $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
         
 
 
     $test = $connexion->prepare('UPDATE  admin SET nom=:nom, prenom=:prenom, email=:email, age=:age WHERE id=:num LIMIT 1');
 

     $test->bindValue(':num', $_POST['numRecipes'], PDO::PARAM_INT);
     $test->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
     $test->bindValue(':prenom', $_POST['lastname'], PDO::PARAM_STR);
     $test->bindValue(':email', $_POST['mail'], PDO::PARAM_STR);
     $test->bindValue(':age', $_POST['age'], PDO::PARAM_STR);
    


    $reussite = $test->execute();

    if ($reussite) {
        header("location: deleteRecipes.php");
    }
    
 
 
 
 

    
     

?>