<?php 


     $connexion = new PDO('mysql:host=localhost;dbname=foodup', 'root', '');
         
 
 
     $test = $connexion->prepare('UPDATE  recettes SET auteur=:auteur, recipes=:recipes, date=:date, ingredient=:ingredient, vue=:vue WHERE id=:num LIMIT 1');
 

     $test->bindValue(':num', $_POST['numRecipes'], PDO::PARAM_INT);
     $test->bindValue(':auteur', $_POST['auteur'], PDO::PARAM_STR);
     $test->bindValue(':recipes', $_POST['speudo'], PDO::PARAM_STR);
     $test->bindValue(':date', $_POST['dateOfAdd'], PDO::PARAM_STR);
     $test->bindValue(':ingredient', $_POST['ingred'], PDO::PARAM_STR);
     $test->bindValue(':vue', $_POST['imageRecette'], PDO::PARAM_STR);



    $reussite = $test->execute();

    if ($reussite) {
        header("location: deleteRecipes.php");
    }
    
 
 
 
 

    
     

?>